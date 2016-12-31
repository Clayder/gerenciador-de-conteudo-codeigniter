<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pagina List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pagina/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?= base_url_admin('pagina'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?= base_url_admin('pagina'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Titulo</th>
		<th>Slug</th>
		<th>Texto</th>
		<th>Resumo</th>
		<th>Status</th>
		<th>Imagem</th>
		<th>Action</th>
            </tr><?php
            foreach ($pagina_data as $pagina)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pagina->titulo ?></td>
			<td><?php echo $pagina->slug ?></td>
			<td><?php echo $pagina->texto ?></td>
			<td><?php echo $pagina->resumo ?></td>
			<td><?php echo $pagina->status ?></td>
			<td><?php echo $pagina->imagem ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('pagina/read/'.$pagina->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('pagina/update/'.$pagina->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('pagina/delete/'.$pagina->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>