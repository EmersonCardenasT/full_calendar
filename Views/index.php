<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/main.min.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div id="calendar">

            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title" id="titulo">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="" id="formulario">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="title" name="title">
                                <label for="title" class="form-label">Evento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="start" name="start">
                                <label for="start" class="form-label">Fecha</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="color" class="form-control" id="color" name="color">
                                <label for="color" class="form-label">Color</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                                <button type="submit" class="btn btn-primary" id="btnAccion">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional: Place to the bottom of scripts -->
        <script>
            // const myModal = new bootstrap.Modal(
            //     document.getElementById("modalId"),
            //     options,
            // );
        </script>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <!--         
        <script
            src="<?php echo base_url; ?>Assets/js/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url; ?>Assets/js/main.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/es.js"></script>
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/app.js"></script>
</body>

</html>