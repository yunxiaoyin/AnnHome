<?php get_header(); ?>

		<!--内容-->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<!--文章内容-->
						<div class="post">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small><?php the_excerpt(); ?></small></h2>
									<small><?php the_time('Y年n月j日') ?>   <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></small>
								</h3>
							</div>
							<div class="panel-body">
								<p class="text-justify">
									<?php the_content('阅读全文...'); ?>
								</p>
							</div>
						</div>
						</div>
						<?php endwhile; ?>
						<?php else : ?>
        					<h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
       					<p>没有找到任何文章！</p>
        				<?php endif; ?>
						<!--翻页-->
						<!--<p class="clearfix"><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?></span></p>
-->						<nav>
							<ul class="pagination">
								<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
							</ul>
						</nav>
						
					</div>
					<div class="col-xs-6 col-md-4">
						<!--侧边栏-->
						<?php get_sidebar(); ?>
					</div>
					<div class="clearfix visible-xs-block"></div>
				</div>
			</div>
		</div>
		
		<?php get_footer(); ?>