<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Admin Tabeliões</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Admin') }}">Tabeliões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('AdminCertidao') }}">Certidões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('AdminContrato') }}">Contratos</a>
            </li>
        </ul>
    </div>
</nav>
