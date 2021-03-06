<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REPAIR SYSTEM | LOG IN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../src/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../src/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../src/dist/css/adminlte.min.css">
    <link rel="icon" href="../src/dist/img/repair_systemLogo.png">
</head>
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../src/dist/img/repair_systemLogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<style>
#error {
    font-family: 'Mitr', sans-serif;
}

.login-box-msg {
    font-family: 'Mitr', sans-serif;
}

.btn {
    font-family: 'Mitr', sans-serif;
}

.h3 {
    font-family: 'Mitr', sans-serif;
    -webkit-text-stroke-width: 1px;
}

.p {
    font-family: 'Mitr', sans-serif;
}

.mb-1 {
    font-family: 'Mitr', sans-serif;
}

.mb-0 {
    font-family: 'Mitr', sans-serif;
}

.icheck-primary {
    font-family: 'Mitr', sans-serif;
}

.input-group {
    font-family: 'Mitr', sans-serif;
}

.error {
    font-family: 'Mitr', sans-serif;
    font-size: 12px;
    font-weight: bold;
}

.icon {
    color: #FF0000;
}

.login-page {
    background: url("../src/dist/img/back.jpg") no-repeat center center fixed;
    background-size: cover;
}

#shadowBox {
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.2);
    /* Black w/opacity/see-through */
    border: 3px solid;
}

.rainbow {
    text-align: center;
    text-decoration: underline;
    font-size: 32px;
    font-family: 'Mitr', sans-serif;
}

.rainbow_text_animated {
    background: linear-gradient(to right, #FF0000, #003CFF, #E500FF);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: rainbow_animation 6s ease-in-out infinite;
    background-size: 400% 100%;
}

@keyframes rainbow_animation {

    0%,
    100% {
        background-position: 0 0;
    }

    50% {
        background-position: 100% 0;
    }
}

.img {
    animation: rotation 8s infinite linear;
}

@keyframes rotation {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(359deg);
    }
}

.input-group-text {
    background-color: white;
    border-color: white;

}
</style>