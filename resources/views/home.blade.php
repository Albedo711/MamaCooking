<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mama cooking</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
<body>
    
    <div class="header">
        <div class="nav-container">
            <div class="nav">
                <div class="nav-brand">
                    <h1><a href="">Mama<span>Cooking</span></a></h1>
                </div>
                <div class="nav-menu">
                    <a href="#">HOME</a>
                    <a href="#about">ABOUT</a>
                    <a href="#contact">CONTACT</a>
                </div>
                <div class="profile">
                    <a href="register" class="btn">Register</a>
                    <a href="login" class="btn">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="hero-desc">
                        <h1>Belajar <span>Resep Makanan</span> Jadi Lebih Mudah Dengan Mama<span>Cooking</span></h1>
                        <p> Mari mulai petualangan memasak Anda bersama kami dan jadikan setiap hidangan spesial!</p>
                        <br>
                        <a href="register" class="btn">Get started</a>
                    </div>
                </div>
                <div class="col">
                    <img src="img/nasgor.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <div class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about-desc">
                    <h1>Mama<span>Cooking</span></h1>
                    <p>Selamat datang di Mama Cooking, tujuan akhir Anda untuk menemukan dan menyempurnakan kelezatan kuliner. Misi kami adalah menjadikan memasak pengalaman yang menyenangkan dan bermanfaat bagi semua orang, mulai dari pemula hingga koki berpengalaman</p>
                    <p>Bergabunglah dengan kami dalam petualangan kuliner ini dan ubah keterampilan memasak Anda. Jelajahi koleksi resep kami, bagikan kreasi Anda sendiri, dan terhubung dengan sesama penggemar makanan. Mari jadikan setiap hidangan pengalaman yang tak terlupakan bersama Mama Cooking!</p>
                    <br>
                </div>
                <img src="assets/burger.png" alt="" class="img-responsive-about">
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container-footer" id="contact">
        <div class="row">
            <div class="col4">
                <div class="footer-desc">
                    <h3>MamaCooking</h3>
                    <p>MamaCooking adalah web resep makanan terlengkap dan terbaik</p>
                </div>
            </div>
            <div class="col4">
                <h3>Need Help?</h3>
                <ul>
                    <li><a href="">Partnership</a></li>
                    <li><a href=""></a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col4">
                <h3>Follow Us On</h3>
                <ul>
                    <li><a href=""><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjU2IDI1NiI+PGcgZmlsbD0ibm9uZSI+PHJlY3Qgd2lkdGg9IjI1NiIgaGVpZ2h0PSIyNTYiIGZpbGw9InVybCgjc2tpbGxJY29uc0luc3RhZ3JhbTApIiByeD0iNjAiLz48cmVjdCB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIgZmlsbD0idXJsKCNza2lsbEljb25zSW5zdGFncmFtMSkiIHJ4PSI2MCIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xMjguMDA5IDI4Yy0yNy4xNTggMC0zMC41NjcuMTE5LTQxLjIzMy42MDRjLTEwLjY0Ni40ODgtMTcuOTEzIDIuMTczLTI0LjI3MSA0LjY0NmMtNi41NzggMi41NTQtMTIuMTU3IDUuOTcxLTE3LjcxNSAxMS41MzFjLTUuNTYzIDUuNTU5LTguOTggMTEuMTM4LTExLjU0MiAxNy43MTNjLTIuNDggNi4zNi00LjE2NyAxMy42My00LjY0NiAyNC4yNzFjLS40NzcgMTAuNjY3LS42MDIgMTQuMDc3LS42MDIgNDEuMjM2cy4xMiAzMC41NTcuNjA0IDQxLjIyM2MuNDkgMTAuNjQ2IDIuMTc1IDE3LjkxMyA0LjY0NiAyNC4yNzFjMi41NTYgNi41NzggNS45NzMgMTIuMTU3IDExLjUzMyAxNy43MTVjNS41NTcgNS41NjMgMTEuMTM2IDguOTg4IDE3LjcwOSAxMS41NDJjNi4zNjMgMi40NzMgMTMuNjMxIDQuMTU4IDI0LjI3NSA0LjY0NmMxMC42NjcuNDg1IDE0LjA3My42MDQgNDEuMjMuNjA0YzI3LjE2MSAwIDMwLjU1OS0uMTE5IDQxLjIyNS0uNjA0YzEwLjY0Ni0uNDg4IDE3LjkyMS0yLjE3MyAyNC4yODQtNC42NDZjNi41NzUtMi41NTQgMTIuMTQ2LTUuOTc5IDE3LjcwMi0xMS41NDJjNS41NjMtNS41NTggOC45NzktMTEuMTM3IDExLjU0Mi0xNy43MTJjMi40NTgtNi4zNjEgNC4xNDYtMTMuNjMgNC42NDYtMjQuMjcyYy40NzktMTAuNjY2LjYwNC0xNC4wNjYuNjA0LTQxLjIyNXMtLjEyNS0zMC41NjctLjYwNC00MS4yMzRjLS41LTEwLjY0Ni0yLjE4OC0xNy45MTItNC42NDYtMjQuMjdjLTIuNTYzLTYuNTc4LTUuOTc5LTEyLjE1Ny0xMS41NDItMTcuNzE2Yy01LjU2Mi01LjU2Mi0xMS4xMjUtOC45NzktMTcuNzA4LTExLjUzYy02LjM3NS0yLjQ3NC0xMy42NDYtNC4xNi0yNC4yOTItNC42NDdjLTEwLjY2Ny0uNDg1LTE0LjA2My0uNjA0LTQxLjIzLS42MDR6bS04Ljk3MSAxOC4wMjFjMi42NjMtLjAwNCA1LjYzNCAwIDguOTcxIDBjMjYuNzAxIDAgMjkuODY1LjA5NiA0MC40MDkuNTc1YzkuNzUuNDQ2IDE1LjA0MiAyLjA3NSAxOC41NjcgMy40NDRjNC42NjcgMS44MTIgNy45OTQgMy45NzkgMTEuNDkyIDcuNDhjMy41IDMuNSA1LjY2NiA2LjgzMyA3LjQ4MyAxMS41YzEuMzY5IDMuNTIgMyA4LjgxMiAzLjQ0NCAxOC41NjJjLjQ3OSAxMC41NDIuNTgzIDEzLjcwOC41ODMgNDAuMzk2cy0uMTA0IDI5Ljg1NS0uNTgzIDQwLjM5NmMtLjQ0NiA5Ljc1LTIuMDc1IDE1LjA0Mi0zLjQ0NCAxOC41NjNjLTEuODEyIDQuNjY3LTMuOTgzIDcuOTktNy40ODMgMTEuNDg4Yy0zLjUgMy41LTYuODIzIDUuNjY2LTExLjQ5MiA3LjQ3OWMtMy41MjEgMS4zNzUtOC44MTcgMy0xOC41NjcgMy40NDZjLTEwLjU0Mi40NzktMTMuNzA4LjU4My00MC40MDkuNTgzYy0yNi43MDIgMC0yOS44NjctLjEwNC00MC40MDgtLjU4M2MtOS43NS0uNDUtMTUuMDQyLTIuMDc5LTE4LjU3LTMuNDQ4Yy00LjY2Ni0xLjgxMy04LTMuOTc5LTExLjUtNy40NzlzLTUuNjY2LTYuODI1LTcuNDgzLTExLjQ5NGMtMS4zNjktMy41MjEtMy04LjgxMy0zLjQ0NC0xOC41NjNjLS40NzktMTAuNTQyLS41NzUtMTMuNzA4LS41NzUtNDAuNDEzcy4wOTYtMjkuODU0LjU3NS00MC4zOTZjLjQ0Ni05Ljc1IDIuMDc1LTE1LjA0MiAzLjQ0NC0xOC41NjdjMS44MTMtNC42NjcgMy45ODMtOCA3LjQ4NC0xMS41czYuODMzLTUuNjY3IDExLjUtNy40ODNjMy41MjUtMS4zNzUgOC44MTktMyAxOC41NjktMy40NDhjOS4yMjUtLjQxNyAxMi44LS41NDIgMzEuNDM3LS41NjN6bTYyLjM1MSAxNi42MDRjLTYuNjI1IDAtMTIgNS4zNy0xMiAxMS45OTZjMCA2LjYyNSA1LjM3NSAxMiAxMiAxMnMxMi01LjM3NSAxMi0xMnMtNS4zNzUtMTItMTItMTJ6bS01My4zOCAxNC4wMjFjLTI4LjM2IDAtNTEuMzU0IDIyLjk5NC01MS4zNTQgNTEuMzU1czIyLjk5NCA1MS4zNDQgNTEuMzU0IDUxLjM0NGMyOC4zNjEgMCA1MS4zNDctMjIuOTgzIDUxLjM0Ny01MS4zNDRjMC0yOC4zNi0yMi45ODgtNTEuMzU1LTUxLjM0OS01MS4zNTV6bTAgMTguMDIxYzE4LjQwOSAwIDMzLjMzNCAxNC45MjMgMzMuMzM0IDMzLjMzNGMwIDE4LjQwOS0xNC45MjUgMzMuMzM0LTMzLjMzNCAzMy4zMzRzLTMzLjMzMy0xNC45MjUtMzMuMzMzLTMzLjMzNGMwLTE4LjQxMSAxNC45MjMtMzMuMzM0IDMzLjMzMy0zMy4zMzQiLz48ZGVmcz48cmFkaWFsR3JhZGllbnQgaWQ9InNraWxsSWNvbnNJbnN0YWdyYW0wIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMCAtMjUzLjcxNSAyMzUuOTc1IDAgNjggMjc1LjcxNykiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjZmQ1Ii8+PHN0b3Agb2Zmc2V0PSIuMSIgc3RvcC1jb2xvcj0iI2ZkNSIvPjxzdG9wIG9mZnNldD0iLjUiIHN0b3AtY29sb3I9IiNmZjU0M2UiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNjODM3YWIiLz48L3JhZGlhbEdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBpZD0ic2tpbGxJY29uc0luc3RhZ3JhbTEiIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgyMi4yNTk1MiAxMTEuMjA2MSAtNDU4LjM5NTE4IDkxLjc1NDQ5IC00Mi44ODEgMTguNDQxKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiMzNzcxYzgiLz48c3RvcCBvZmZzZXQ9Ii4xMjgiIHN0b3AtY29sb3I9IiMzNzcxYzgiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM2MGYiIHN0b3Atb3BhY2l0eT0iMCIvPjwvcmFkaWFsR3JhZGllbnQ+PC9kZWZzPjwvZz48L3N2Zz4=" alt="">  Instagram</a></li>
                    <li><a href=""><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjU2IDI1NiI+PHBhdGggZmlsbD0iIzE4NzdmMiIgZD0iTTI1NiAxMjhDMjU2IDU3LjMwOCAxOTguNjkyIDAgMTI4IDBTMCA1Ny4zMDggMCAxMjhjMCA2My44ODggNDYuODA4IDExNi44NDMgMTA4IDEyNi40NDVWMTY1SDc1LjV2LTM3SDEwOFY5OS44YzAtMzIuMDggMTkuMTEtNDkuOCA0OC4zNDgtNDkuOEMxNzAuMzUyIDUwIDE4NSA1Mi41IDE4NSA1Mi41Vjg0aC0xNi4xNEMxNTIuOTU5IDg0IDE0OCA5My44NjcgMTQ4IDEwMy45OVYxMjhoMzUuNWwtNS42NzUgMzdIMTQ4djg5LjQ0NWM2MS4xOTItOS42MDIgMTA4LTYyLjU1NiAxMDgtMTI2LjQ0NSIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Im0xNzcuODI1IDE2NWw1LjY3NS0zN0gxNDh2LTI0LjAxQzE0OCA5My44NjYgMTUyLjk1OSA4NCAxNjguODYgODRIMTg1VjUyLjVTMTcwLjM1MiA1MCAxNTYuMzQ3IDUwQzEyNy4xMSA1MCAxMDggNjcuNzIgMTA4IDk5LjhWMTI4SDc1LjV2MzdIMTA4djg5LjQ0NUExMjkgMTI5IDAgMCAwIDEyOCAyNTZhMTI5IDEyOSAwIDAgMCAyMC0xLjU1NVYxNjV6Ii8+PC9zdmc+" alt="">  Facebook</a></li>
                    <li><a href=""><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxLjQzZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjU2IDE4MCI+PHBhdGggZmlsbD0iI2YwMCIgZD0iTTI1MC4zNDYgMjguMDc1QTMyLjE4IDMyLjE4IDAgMCAwIDIyNy42OSA1LjQxOEMyMDcuODI0IDAgMTI3Ljg3IDAgMTI3Ljg3IDBTNDcuOTEyLjE2NCAyOC4wNDYgNS41ODJBMzIuMTggMzIuMTggMCAwIDAgNS4zOSAyOC4yNGMtNi4wMDkgMzUuMjk4LTguMzQgODkuMDg0LjE2NSAxMjIuOTdhMzIuMTggMzIuMTggMCAwIDAgMjIuNjU2IDIyLjY1N2MxOS44NjYgNS40MTggOTkuODIyIDUuNDE4IDk5LjgyMiA1LjQxOHM3OS45NTUgMCA5OS44Mi01LjQxOGEzMi4xOCAzMi4xOCAwIDAgMCAyMi42NTctMjIuNjU3YzYuMzM4LTM1LjM0OCA4LjI5MS04OS4xLS4xNjQtMTIzLjEzNCIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Im0xMDIuNDIxIDEyOC4wNmw2Ni4zMjgtMzguNDE4bC02Ni4zMjgtMzguNDE4eiIvPjwvc3ZnPg==" alt="">  Youtube</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    
   
</body>
</html>