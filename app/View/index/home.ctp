<?php echo $this->element('header'); ?>
<?php echo $this->element('slider'); ?>
<div class="mainContent">
    <div class="container">
        <div class="row">
            <div class="span9">
                <section class='sectionInfo aboutus'>
                    <h4>About us </h4>
                    <p>CakePHP features not only a web framework but also a console framework for creating console applications.
                        Console applications are ideal for handling a variety of background tasks such as maintenance, and
                        completing work outside of the request-response cycle. CakePHP console applications allow you to reuse
                        your application classes from the command line.
                        CakePHP comes with a number of console applications out of the box. Some of these applications are used
                        in concert with other CakePHP features (like ACL or i18n), and others are for general use in getting you
                        CakePHP features not only a web framework but also a console framework for creating console applications.
                        Console applications are ideal for handling a variety of background tasks such as maintenance, and
                        completing work outside of the request-response cycle. CakePHP console applications allow you to reuse
                        your application classes from the command line.
                        CakePHP comes with a number of console applications out of the box. Some of these applications are used
                        in concert with other CakePHP features (like ACL or i18n), and others are for general use in getting you
                        working faster.
                    </p>
                </section>

                <section class='sectionInfo homeNews'>
                    <h4>Latest News / Events</h4>
                    <ul>
                        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. 
                            Sed arcu. Cras consequat.</li>
                        <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu 
                            erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique 
                            cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>

                    </ul>
                </section>
            </div>
            <div class="span3">
                <div class="donateBox txtCenter">
                    <a href='#'>
                        <h3>Donate and support to Jogi Samaj</h3>
                    </a>
                </div>
                <div class="socialShareBox">
                    <p><b>Like us</b></p>
                    <a href="#" class="icon-fb">Facebook</a>
                    <a href="#" class='icon-twt'>Twitter</a>
                </div>
                <div class="advtWrapper">
                    <img src="<?php echo $this->webroot; ?>images/advt.jpg" />
                </div>
                <div class="advtWrapper">
                    <img src="<?php echo $this->webroot; ?>images/advt.jpg" />
                </div>
                <div class="advtWrapper">
                    <img src="<?php echo $this->webroot; ?>images/advt.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('ourSupporter'); ?>
<?php echo $this->element('footer'); ?>