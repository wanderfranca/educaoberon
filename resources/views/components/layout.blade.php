<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css','resources/css/bootstrap.css','resources/js/app.js', 'resources/js/bootstrap.js'])
    <script src="https://kit.fontawesome.com/4f44452ef3.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class=" wrapper">
    {{-- Sidebar --}}
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">EducaOberon</a>
                </div>
                {{-- Sidebar navegação --}}
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Categorias de Ensino
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Matérias
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Cursos
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Disciplinas
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Provas Classificatórias
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        {{-- Main --}}
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                {{-- Botão para toggle --}}
                <button class="btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container fluid">
                    <div class="mb-3">
                        <h3>Gerador de provas</h3>
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>

    @vite(['resourcer/js/bootstrap.bundle.js'])
  </body>



</html>
