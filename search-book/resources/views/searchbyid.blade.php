<!-- searchbyid.blade.php -->

<html>
<head>
    <title>Search by ID</title>
    <style>
       body{
            background-color:rgb(32, 33, 36);  
            color: white;
       }
        .card {
            width: 400px;
            padding: 60px;
            margin: 20px;
            border: 1px solid #454549;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: rgb(26, 34, 61);
            color:rgb(221, 239, 255);
            font-family: Arial, Helvetica, sans-serif;
        }
        
        

        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .card-details {
            margin-top: 10px;
        }

        .card-label {
            font-weight: bold;
        }

        .card-value {
            margin-left: 5px;
        }
        .card-cont {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          background-color: rgb(32, 33, 36);
          border-radius: 10px;
        }
        .search-container{
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .search-form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .search-input {
            width: 200px;
            padding: 5px;
            margin-right: 10px;
        }

        .search-button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
         <h1>Search by ID</h1>
    </center>

     <div class="search-container">
          <input id="search-input" class="search-input" type="text" placeholder="Enter ID">
          <button id="search-button" class="search-button">Search</button>
     </div>
    
     

     <div class="card-cont">
          <div class="card">
               @if ($book)
              <center>
            <h2 class="card-title"><u>{{ $book->title }}</u></h2>
        </center>   
            <div class="card-details">
                   <p><span class="card-label">Book ID:</span> <span class="card-value"><u>{{ $book->id }}</u></span></p>
                   <p><span class="card-label">Author:</span> <span class="card-value">{{ $book->author }}</span></p>
                   <p><span class="card-label">Publisher:</span> <span class="card-value">{{ $book->publisher }}</span></p>
                   <p><span class="card-label">Publication Date:</span> <span class="card-value">{{ $book->publication_date }}</span></p>
                   <p><span class="card-label">ISBN:</span> <span class="card-value">{{ $book->isbn }}</span></p>
                   <p><span class="card-label">Price:</span> <span class="card-value">{{ $book->price }}</span></p>
                   <p><span class="card-label">Genre:</span> <span class="card-value">{{ implode(', ', $book->genre) }}</span></p>
                   <p><span class="card-label">Quantity:</span> <span class="card-value">{{ $book->quantity }}</span></p>
               </div>
               @else
               <p>No book found with the provided ID.</p>
               @endif
           </div>

     </div>
     <script>
          const searchButton = document.getElementById('search-button');
          const searchInput = document.getElementById('search-input');

          const searchButtonGenre = document.getElementById('search-button-genre');
          const searchInputGenre = document.getElementById('search-input-genre');
  
          searchButton.addEventListener('click', () => {
              const bookId = searchInput.value;
              window.location.href = `/books/${bookId}`;
          });

          searchButtonGenre.addEventListener('click', () => {
              const genre = searchInputGenre.value;
              window.location.href = `/books/genre/${genre}`;
          });
      </script>

    
</body>
</html>
