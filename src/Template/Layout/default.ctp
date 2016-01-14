<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset()?>
    <meta name="viewport"
	content="width=device-width, initial-scale=1.0">
<title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title')?>
    </title>
    <?= $this->Html->meta('icon')?>

    <?= $this->Html->css('base.css')?>
    <?= $this->Html->css('cake.css')?>

    <?= $this->fetch('meta')?>
    <?= $this->fetch('css')?>
    <?= $this->fetch('script')?>
</head>
<body>
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				<h1>
					<a href="#">PM Tool</a>
				</h1>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<li class="active"><a href="#">Right Button Active</a></li>
				<li class="has-dropdown"><a href="#">Right Button Dropdown</a>
					<ul class="dropdown">
						<li><a href="#">First link in dropdown</a></li>
						<li class="active"><a href="#">Active link in dropdown</a></li>
					</ul></li>
			</ul>

			<!--
			==========********** Navigation Menu **********==========
			-->
			<ul class="left">
				<li><?php echo $this->Html->link(__('Projects'), ['controller' => 'projects', 'action' => 'index']); ?></li>
				<li><?php echo $this->Html->link(__('Categories'), ['controller' => 'categories', 'action' => 'index']); ?></li>
				<li><?php echo $this->Html->link(__('Clients'), ['controller' => 'clients', 'action' => 'index']); ?></li>
				<li><?php echo $this->Html->link(__('Notes'), ['controller' => 'notes', 'action' => 'index']); ?></li>
				<li><?php echo $this->Html->link(__('Tags'), ['controller' => 'tags', 'action' => 'index']); ?></li>
				<li><?php echo $this->Html->link(__('Users'), ['controller' => 'users', 'action' => 'index']); ?></li>
			</ul>
		</section>
	</nav>
    <?= $this->Flash->render()?>
    <section class="container clearfix">
        <?= $this->fetch('content')?>
    </section>
	<footer> </footer>
</body>
</html>
