<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="row">
            <div class="header">
                <h3>Futures of Digito Theme</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum voluptatibus praesentium doloremque
                    natus ipsa. Impedit voluptates blanditiis aperiam dicta ad omnis, voluptatem facilis beatae sint
                    deleniti deserunt! Pariatur, consequuntur assumenda.</p>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="mybody">
                    <h4 class="pd-top"><p>Full Responsive</p></h4>
                    <p>You Style Will Look Great On MyChannel</p>
                </div>
            </div>

        </div>
    </div>
</div>