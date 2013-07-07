<div class="home-bg">
<div id="signin">
    <h2>Room Met Classy Software!</h2>
    <div class="error"></div>
    <?php
    echo $this->Session->flash('auth', array('params' => array('class' => 'alert alert-error')));
    echo $this->Session->flash('flash');
    $inputDefaults['label'] = false;
    echo $this->Form->create('User');
    // debug($inputDefaults);

    ?>
      <fieldset id="inputs">
        <?php
        echo $this->Form->input(
          'username',
          array(
            'label' => false,
            'div' => false,
            'placeholder' => 'Username',
            'autofocus' => 'autofocus'
          )
        );
        echo $this->Form->input(
          'password',
          array(
            'label' => false,
            'div' => false,
            'placeholder' => 'Password'
          )
        );
        echo $this->Form->submit(
          __('Sign in'),
          array(
            'class'=>'button small',
            'label' => false,
            'div' => false
          )
        );
        ?>
      </fieldset>
      <fieldset id="actions">
        <ul>
          <li>
          <?php
         
          ?>
          </li>
        </ul>
         <?php
        echo $this->Html->link(
          'Create New Account',
          array(
            'controller' => 'users',
            'action' => 'signup'
          ),
          array(
            'class' => 'button big'
          )
        );
        ?>
   
        <?php
       
        ?>
      </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
</div>
