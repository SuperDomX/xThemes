<div class="row">
  <div class="col-md-12">
    <ul class="row thumbnails">
      {foreach $data as $k => $v}
        <li class="col-sm-4">
          <div class="thumbnail">
              <img src="img/10.jpg" alt="">
              <div class="caption">
                  <h4>
                    {$v|ucwords|replace:'_':' '}
                  </h4>
                  <p>
                    <strong>You will never know exactly how something will go until you try it.</strong> You can think three hundred times and still have no precise result... </p>
                  <p class="text-right">
                    <a href="#" class="btn btn-lg btn-success">
                      Install 
                    </a> 
                    <a href="#" class="btn btn-lg btn-info">
                      Preview
                    </a>
                  </p>
              </div>
          </div>
        </li>
      {/foreach}
    </ul>
  </div>
</div>
