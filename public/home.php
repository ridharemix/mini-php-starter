<?php require __DIR__ . "/../config/config.php"; ?>
<?php require __DIR__ . "/__template/header.php"; ?>
<!-- Nav tabs -->
<ul class="nav nav-tabs container my-5" id="navId" role="tablist">
    <li class="nav-item">
        <a href="#tab1" class="nav-link active" data-bs-toggle="tab">Home</a>
    </li>
    <li class="nav-item">
        <a href="#tab2" class="nav-link" data-bs-toggle="tab">About</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
        <div class="container mt-5">
            <h1>Hello Wolrd!!!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia temporibus facere incidunt blanditiis perspiciatis inventore mollitia, culpa deleniti voluptates eligendi saepe laudantium nihil fuga est repellendus quam, ad consequuntur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia temporibus facere incidunt blanditiis perspiciatis inventore mollitia, culpa deleniti voluptates eligendi saepe laudantium nihil fuga est repellendus quam, ad consequuntur.</p>
            <a href="youtube">🎵 Youtube</a>
        </div>
    </div>
    <div class="tab-pane fade" id="tab2" role="tabpanel">
        <div class="container mt-5">
            <h1>About</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia temporibus facere incidunt blanditiis perspiciatis inventore mollitia, culpa deleniti voluptates eligendi saepe laudantium nihil fuga est repellendus quam, ad consequuntur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium officia temporibus facere incidunt blanditiis perspiciatis inventore mollitia, culpa deleniti voluptates eligendi saepe laudantium nihil fuga est repellendus quam, ad consequuntur.</p>
        </div>
    </div>
</div>
<?php require __DIR__ . "/__template/footer.php"; ?>