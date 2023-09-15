 @if (isset($books->id))
     @method('PUT')
     <form class="needs-validation" id="bookForm" method="post" action="{{ route('book.create', $books->id) }}"
         novalidate="">
         @csrf
     @else
         <form class="needs-validation" id="bookForm" method="post" action="{{ route('book.store') }}" novalidate="">
             @csrf
 @endif
 <div class="row g-3">
     <div class="col-sm-6">
         <label for="validationCustom01" class="form-label">Titulo</label>
         <input type="text" class="form-control" name="titule" id="validationCustom01" placeholder="A bela e a fera"
             value="" required>
         <div class="valid-feedback">
             Titulo preenchido!
         </div>
     </div>

     <div class="col-sm-3">
         <label for="validationCustom02" class="form-label">Número de
             páginas</label>
         <input type="number" class="form-control" name="page" id="validationCustom02" placeholder="123"
             value="" required>
         <div class="valid-feedback">
             Número de páginas preenchido!
         </div>
     </div>
     <div class="col-sm-3">
         <label for="validationCustom03" class="form-label">Data de
             lançamento</label>
         <input type="number" min="1800" id="validationCustom03" name="realese_date" max="" step="1"
             class="form-control" placeholder="1800" value="" required>
         <div class="valid-feedback">
             Data de lançamento preenchido!
         </div>
         <script>
             // Get the input element with ID 'validationCustom03'
             const inputAno = document.getElementById('validationCustom03');

             // Get the current date
             const dataAtual = new Date();

             // Get the current year
             const anoAtual = dataAtual.getFullYear();

             // Set the maximum attribute of the input element to the current year
             inputAno.setAttribute('max', anoAtual);
         </script>
     </div>

     <div class="col-sm-4 mt-2">
         <label for="validationServer04" class="form-label">Selecionar o autor</label>
         <select class="form-select" id="validationServer04" name="author_id"
             aria-describedby="validationServer04Feedback" required="">
             <option selected="" disabled="" value="">Escolha...</option>
             @foreach ($authors as $author)
                 <option value='{{ $author->id }}'>{{ $author->name }}</option>
             @endforeach
         </select>
         <div class="valid-feedback">
             Autor(a) selecionado(a)!
         </div>
     </div>
     <div class="col-sm-4 mt-2">
         <label for="validationServer05" class="form-label">Selecionar o livraria</label>
         @foreach ($libraries as $library)
             <select class="form-select" id="validationServer05" name="library_id"
                 aria-describedby="validationServer05Feedback" required="">
                 <option selected="" disabled="" value="">Escolha...</option>
                 <option value='{{ $library->id }}'>{{ $library->name }}</option>
             </select>
         @endforeach
         <div class="valid-feedback">
             Livraria selecionada
         </div>
     </div>
     <div class="col-sm-4 mt-2">
         <label for="validationServer06" class="form-label">Selecionar a editora</label>
         @foreach ($publishers as $publisher)
             <select class="form-select" id="validationServer06" name="publisher_id"
                 aria-describedby="validationServer06Feedback" required="">
                 <option selected="" disabled="" value="">Escolha...</option>
                 <option value='{{ $publisher->id }}'>{{ $publisher->name }}</option>
             </select>
         @endforeach
         <div class="valid-feedback">
             Editor(a) selecionado(a)
         </div>
     </div>

     <div class="mb-3">
         <input type="file" class="form-control" aria-label="file example" name="img" accept="image/*" required>
         <div class="valid-feedback">Arquivo selecionado!</div>
     </div>
 </div>

 @if (isset($books->id))
     <button class="w-20 my-4 btn btn-primary btn-ls" type="submit" onclick="submitForm()">Salvar</button>
 @else
     <button class="w-20 my-4 btn btn-primary btn-ls" type="submit" onclick="submitForm()">Cadastrar</button>
 @endif
 </form>
