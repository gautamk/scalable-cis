<div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li >
                <?php 
                    echo $this->Html->link('Index', 
                      array('action'=>'index'),
                      array('class'=>'')); 
                  ?>
              </li>
              <li class="" ><?php 
                    echo $this->Html->link('Add data', 
                      array('action'=>'add'),
                      array('class'=>'')); 
                  ?>
              </li>
              <li class="active" ><a href="#" title="">Edit</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
    <div class="span9">
      <div class="row-fluid">
        <div class="hero-unit">
            <h1>Edit Post</h1>
            <p>
                
              <?php echo $this->Form->create('Post' , array( 'type' => 'post' ));?>
              <fieldset>
                  <legend><?php __('Edit Post');?></legend>
                  <?php
                    echo $this->Form->hidden('_id');
                    echo $this->Form->input('title',array('class'=>'span7'));
                	echo $this->Form->input('body',array('class'=>'span7'));
                    
                  ?>
              </fieldset>
              <input type="submit" value="Save" class="span2 btn btn-success btn-large ">
              <?php 
                echo $this->Html->link(
                                       'Cancel', 
                                       array('action'=>'index'),
                                       array('class'=>'btn btn-danger  ')
                  );
              ?>
            <?php echo $this->Form->end();?>
            </p>
        </div>

    </div><!--/row-->
    </div><!--/span-->

</div><!--/row-->