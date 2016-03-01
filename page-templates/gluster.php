<?php /* Template Name: Gluster */ ?>

<?php
    wp_head();
    get_header();
?>

<div class="container contentblock">
<div class="row spacer">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">

<style>
.deb, .rpm {
    border-left-width: 1px;
    border-right-width: 1px;
    border-top-width: 0px;
    border-bottom-width: 0px;
    border-style: solid;
}

.deb {
    border-color: #0000FF;
}
.rpm {
    border-color: #FF0000;
}
</style>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
$(document).ready( function() {
    $("#main").hide();
    $(".rpm").hide();
    $(".deb").hide();
    $("input").on("click", function () {
        if ($("input[name='archradio']:checked").val() == "rpm") {
            $("#main").show();
            $(".rpm").show();
            $(".deb").hide();
        }
        if ($("input[name='archradio']:checked").val() == "deb") {
            $("#main").show();
            $(".rpm").hide();
            $(".deb").show();
        }
    })

});
</script>


<h2>How to install Gluster FS</h2>
<hr>
<p><strong>Prerequisites</strong></p>
<ul>
<li>At least two servers</li>
<li>Your servers should ideally have a second disk or partition each. I recommend that it's formatted with xfs</li>
<li>Private network</li>
</ul>

<p>Please select your architecture</p>
<form name="arch" id="arch" method="GET" action="#">
    <div class="radio">
        <label>
            <input type="radio" name="archradio" id="rpmradio" value="rpm"> Red Hat or CentOS 7 - <font color="red">Highlighted in red</font>
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="archradio" id="debradio" value="deb"> Ubuntu 14.04 - <font color="blue">Highlighted in blue</font>
        </label>
    </div>
</form>
<div id="main" align="left">
<h2>Install the packages</h2>
Add the following to file <code class="rpm">/etc/yum.repos.d/glusterfs-epel.repo</code><code class="deb">/etc/apt/sources.list.d/glusterfs.list</code>:</p>

<pre class="rpm">[glusterfs-epel]
name=GlusterFS is a clustered file-system capable of scaling to several petabytes.
baseurl=http://download.gluster.org/pub/gluster/glusterfs/LATEST/EPEL.repo/epel-$releasever/$basearch/
enabled=1
skip_if_unavailable=1
gpgcheck=1
gpgkey=http://download.gluster.org/pub/gluster/glusterfs/LATEST/EPEL.repo/pub.key

[glusterfs-noarch-epel]
name=GlusterFS is a clustered file-system capable of scaling to several petabytes.
baseurl=http://download.gluster.org/pub/gluster/glusterfs/LATEST/EPEL.repo/epel-$releasever/noarch
enabled=1
skip_if_unavailable=1
gpgcheck=1
gpgkey=http://download.gluster.org/pub/gluster/glusterfs/LATEST/EPEL.repo/pub.key

[glusterfs-source-epel]
name=GlusterFS is a clustered file-system capable of scaling to several petabytes. - Source
baseurl=http://download.gluster.org/pub/gluster/glusterfs/LATEST/EPEL.repo/epel-$releasever/SRPMS
enabled=0
skip_if_unavailable=1
gpgcheck=1
gpgkey=http://download.gluster.org/pub/gluster/glusterfs/LATEST/EPEL.repo/pub.key
</pre>
<pre class="deb">deb http://ppa.launchpad.net/gluster/glusterfs-3.7/ubuntu trusty main
deb-src http://ppa.launchpad.net/gluster/glusterfs-3.7/ubuntu trusty main
</pre>

Now run the install:
<code class="deb">apt update</code><br class="deb" />
<code><span class="rpm">yum</span><span class="deb">apt</span> install glusterfs-server <span class="rpm">glusterfs glusterfs-fuse</span><span class="deb">glusterfs-client</span></code>

<h2>Edit your hosts files</h2>
<p>It's easier to refer to each server by some kind of name, so you can use a hosts file for this. It's better than DNS because it'll be quick. Replace the below with the names and hostnames that you would like, but the general feeling is there. This should be done on both servers so that everything works smoothly. The hosts file is in <code>/etc/hosts</code>.
<pre>192.168.100.1 glu1
192.168.100.2 glu2</pre>


<h2>Start the service</h2>
<code class="rpm">systemctl enable glusterd</code><br />
<code class="rpm">systemctl start glusterd</code>
<code class="deb">service glusterfs-server start</code>

<h21>Probe the peers</h2>
<p>From your frist server, probe the second server:</p>
<code>root@glu1# gluster peer probe glu2</code>

<p>And vice versa:</p>
<code>root@glu2# gluster peer probe glu1</code>

<h2>Mount your second disk with xfs</h2>
<p>We will first format our second disk, then mount it. This should be done on both servers.</p>
<code>mkfs.xfs /dev/xvdb</code><br />
<code>mkdir /var/lib/gluster</code><br />
<code>mount /dev/xvdb /var/lib/gluster</code><br />
<code>mtab -n1 >> /etc/fstab</code>

<h2>Create your bricks</h2>
<p>On each server we create the bricks to be added to the volume.</p>
<code>root@glu1# /var/lib/gluster/brick1</code><br />
<code>root@glu2# /var/lib/gluster/brick2</code>

<h2>Create the volume</h2>
<p>You only need to create the volume on one server because it will send the details to the other</p>
<code>gluster volume create volume1 replica 2 glu1:/var/lib/gluster/brick1 glu2:/var/lib/gluster/brick2</code><br />
<code>gluster volume start volume1</code><br />

<h2>Mount the volume</h2>
<p>Now create the mount point and mount gluster on both servers</p>
<code>mkdir /mnt/gluster</code><br />
<code>mount -t glusterfs glu1:/volume1 /mnt/gluster -o backup-volfile-servers=glu2</code>
<p>Alternatively, use this to ensure the mount command is the same on both servers</p>
<code>mount -t glusterfs glu1,glu2:/volume1 /mnt/gluster</code>



</div>

</div>
</div>
</div>
</div>
</div>

<?php
    get_footer();
    wp_footer();
?>
