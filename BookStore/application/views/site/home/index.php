<?php $this->load->view('site/home/left');
	if(isset($message) && $message)
	{
		echo "<script>alert('".$message."');</script>";
	}
?>
<div id="content_right">
            <h3>Books</h3>
			<div class="products">
				<ul>
					<?php foreach($list as $row):?>
					<li>
						<div class="product">
							<a href="<?php echo base_url('site/book/index?id='.$row->id_book);?>" class="info">
								<span class="holder">
									<img src="<?php echo public_url('site/images/book/').$row->link_image;?>" alt="" />
									<span class="book-name"><?php echo $row->name;?></span>
									<span class="author"><?php echo $row->author;?></span>
								</span>
							</a>
						</div>
					</li>
				<?php endforeach;?>
					
				</ul>
			</div>

	<div style="width: 300px;">
		<div class='pagination' style="position: inherit;">
			<?php echo $this->pagination->create_links();?>  
		</div>
	</div>
	
</div> <!-- end of content right -->

	
		