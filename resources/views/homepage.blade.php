<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="aheworks.com">
    <meta name="keywords" content="Steam Uzun Oyun Fiyatları">
    <meta name="description" content="Steamde Olan Oyunları Aratıp Fiyatlarını Kolayca Öğrenebilirsiniz">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{asset("app/data")}}/css/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Oyun ara</title>
</head>
<body style="background-image: url('{{asset("app/data/images/165843.jpg")}}')">
    <div class="s130">
        <form>
            <div class="inner-form">
                <div class="input-field first-wrap">
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </div>
                    <input type="text" id="text" class="form-control inin" placeholder="Oyun Ara FF ! ...">
                </div>
                <div class="input-field second-wrap">
                    <input type="button" id="btn" class="btn-search" value="Ara" onClick="javascript: window.open('/' + document.getElementById('text').value);" />
                </div>
            </div>
            <span class="info">ex. Game,</span>
        </form>
    </div>

    <script>
        var input = document.getElementById("text");
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("btn").click();
            }
        });
    </script>
    <script src="{{asset("app/data")}}/js/extention/choices.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
