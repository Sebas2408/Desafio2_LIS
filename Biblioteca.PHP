<?php
// Definir un array para almacenar los libros
$books = [];

// Función para agregar un nuevo libro al array
function addBook($author, $title, $numedicion, $LugPubli, $Editorial, $AnoEdi, $NumPaginas, $Notas, $ISBN) {
    global $books;
    $newBook = [
        'author' => $author,
        'title' => $title,
        'edition' => $numedicion,
        'place' => $LugPubli,
        'publisher' => $Editorial,
        'year' => $AnoEdi,
        'pages' => $NumPaginas,
        'notes' => $Notas, 
        'isbn' => $ISBN
    ];
    array_push($books, $newBook);
}

// Función para mostrar los libros ingresados
function displayBooks() {
    global $books;
    foreach ($books as $book) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $book['title'] . '</h5>';
        echo '<p class="card-text"><strong>Autor:</strong> ' . $book['author'] . '</p>';
        echo '<p class="card-text"><strong>Title:</strong> ' . $book['title'] . '</p>';
        echo '<p class="card-text"><strong>Número de Edición:</strong> ' . $book['edition'] . '</p>';
        echo '<p class="card-text"><strong>Lugar de Publicación:</strong> ' . $book['place'] . '</p>';
        echo '<p class="card-text"><strong>Editorial:</strong> ' . $book['publisher'] . '</p>';
        echo '<p class="card-text"><strong>Año de la Edición:</strong> ' . $book['year'] . '</p>';
        echo '<p class="card-text"><strong>Número de Páginas:</strong> ' . $book['pages'] . '</p>';
        echo '<p class="card-text"><strong>Notas:</strong> ' . $book['notes'] . '</p>';
        echo '<p class="card-text"><strong>ISBN:</strong> ' . $book['isbn'] . '</p>';
        echo '</div></div>';
    }
}

// Manejar el formulario de ingreso de libros
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $numedicion = $_POST['numedicion'];
    $LugPubli = $_POST['LugPubli'];
    $Editorial = $_POST['Editorial'];
    $AnoEdi = $_POST['AnoEdi'];
    $NumPaginas = $_POST['NumPaginas'];
    $Notas = $_POST['Notas'];
    $ISBN = $_POST['ISBN'];

    // Llamar a la función addBook para agregar el libro al array
    addBook($author, $title, $numedicion, $LugPubli, $Editorial, $AnoEdi, $NumPaginas, $Notas, $ISBN);
}
?>

