<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/admin.css">
    <title>ADMIN-FIRST SCHOOL</title>
</head>

<body>
    <nav class="admin-nav w-100">
        <div class="logo-div">
            <img src="images/first_sch.png" alt="">
        </div>

        <div class="categories">
            <button class="nav_btn"><span class="text">STUDENTS</span><span>Etudiantes</span></button>
            <button class="nav_btn"><span class="text">STAFF</span><span>Personnel</span></button>
            <button class="nav_btn"><span class="text">COURSES</span><span>Cours</span></button>
            <button class="nav_btn"><span class="text">SETTINGS</span><span>Paramètres</span></button>
        </div>
        <div class="admin-profile pe-4">
            <h4>ADMIN NAME</h4>
        </div>
    </nav>
    <section class="main w-100">
        <div class="header w-100 p-3">
            <h3>COURSES</h3>
            <hr>
        </div>
        <div class="main-panel w-100">
            <div class="category-summary">
                <div class="buttons-list w-100">
                    <button class="btn-option selected">GENERAL <span class="fragment"></span></button>
                    <a href="admin"><button class="btn-option">ADD COURSES <span class="fragment"></span></button></a>
                </div>
            </div>
            <div class="category-tables">

                <div class="panel active w-100">
                    <div class="cat-head w-100">
                        <h4>GENERAL OVERVIEW</h4>
                        <hr class="w-100">
                    </div>
                    <div class="table-section w-100">
                        <table class="table table-dark w-100">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel w-100">
                    <div class="cat-head w-100">
                        <h4>ADD COURSES FORM</h4>
                        <hr class="w-100">
                    </div>
                    <div class="table-section w-100">
                        <table class="table table-dark w-100">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>

    </section>
</body>

<script>
    const buttons = document.querySelectorAll('.btn-option');

    const panels = document.querySelectorAll('.panel');

    buttons.forEach(button_clicked => {
        button_clicked.addEventListener("click", () => {
            const selected = document.querySelectorAll('.selected');

            selected.forEach(btn => {
                btn.classList.remove("selected")
            })


            button_clicked.classList.add("selected")
        })

    })

    document.addEventListener("click", () => {
        for (let i = 0; i < buttons.length; i++) {
            if (buttons[i].classList.contains("selected")) {
                panels[i].classList.add("active")
            } else {
                panels[i].classList.remove("active")
            }
        }
    })
</script>

</html>