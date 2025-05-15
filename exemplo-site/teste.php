<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-6 bg-primary">Coluna 1</div>
            <div class="col-6 bg-secondary">Coluna 2</div>
        </div>
        <div class="row mt-5 justify-content-center"><!--margem top -->
            <button class="col-2 btn btn-primary">Principal</button>
            <button class="col-2 btn btn-danger">Perigo</button>
        </div>

        <div class="row mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Nome</th> 
                    </tr>
                </thead>
                <tbody>
                <tr>
                       <td>1</td> 
                       <td>Ana Alice</td> 
                    </tr>
                    <tr>
                       <td>2</td> 
                       <td>Philipe</td> 
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row mt-5">
            <form>
                <div class="mb-5">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder= "Digite seu E-mail">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>