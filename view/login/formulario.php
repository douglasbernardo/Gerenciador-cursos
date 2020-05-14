<?php require_once __DIR__ . '/../inicio-html.php' ?>
    <form action="/realizar-login" method="post">
        <label for="email">E-mail</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="seu E-mail" autocomplete="off" aria-describedby="basic-addon1">
        </div>
        <label for="senha">Senha</label>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" aria-describedby="basic-addon2">
        </div>
        <button class="btn btn-primary">Logar</button>
        <a href='/cadastro'>Ainda não tem cadastro?</a>
    </form>
<?php require_once __DIR__ . '/../fim-html.php';