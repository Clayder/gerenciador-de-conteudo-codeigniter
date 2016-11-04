<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse" role="navigation">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Painel</a>
        </li>
        <li class="active">
            <a href="javascript:;" data-toggle="collapse" data-target="#drop-paginas"><i class="fa fa-files-o" aria-hidden="true"></i> Páginas <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="drop-paginas" class="collapse">
                <li>
                    <a href="<?php echo base_url_admin('pagina'); ?>">Todas as Páginas</a>
                </li>
                <li>
                    <a href="<?php echo base_url_admin('pagina/cadastrar'); ?>">Adicionar nova</a>
                </li>
                <li>
                    <a href="<?php echo base_url_admin('pagina/categorias'); ?>">Categorias</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-picture-o"></i> Galeria</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#drop-post"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Posts<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="drop-post" class="collapse">
                <li>
                    <a href="<?php echo base_url_admin('post'); ?>">Todos os posts</a>
                </li>
                <li>
                    <a href="<?php echo base_url_admin('post/cadastrar'); ?>">Adicionar novo</a>
                </li>
                <li>
                    <a href="<?php echo base_url_admin('post/categorias'); ?>">Categorias</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#drop-config"><i class="fa fa-fw fa-cog"></i> Configurações<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="drop-config" class="collapse">
                <li>
                    <a href="#">Usuários</a>
                </li>
                <li>
                    <a href="#">Grupos</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>