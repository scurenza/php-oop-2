<div class="card" style="width: 18rem;">
    <img src="<?php echo $product->poster; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $product->name; ?> </h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, voluptatibus.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Prezzo: <?php echo $product->price; ?> €</li>
        <li class="list-group-item">Categoria: <?php echo $product->category->name; ?></li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Acquista</a>
    </div>
</div>