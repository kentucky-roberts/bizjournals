<style>
    .progress {
        .progress-indicators {
            backgrond-color: red;
            color:red;
            height:15px;
            width:15px;
            border: 1px solid red;

            .active {
                color:yellow;
                border: 2px solid yellow;
            }
        }
    }
</style>
<div class="row">
    <div class="col-xs-12">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">This Panel Will Fill It's Container! </h3>
        </div><!-- // .panel-heading // -->
        <div class="panel-body">
          Panel content
        </div><!-- // .panel-body // -->
        <div class="panel-footer">
          Panel footer
        </div><!-- // .panel-footer // -->
      </div><!-- // .panel-default // -->


        <ul class="progress">
            <li class="progress-indicators active"></li>
            <li class="progress-indicators"></li>
            <li class="progress-indicators"></li>
            <li class="progress-indicators"></li>
        </ul>



    </div>
</div>