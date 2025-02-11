  <!-- Mainly scripts -->

  <script src="/FoodDelivery/public/js/bootstrap.min.js"></script>
  <script src="/FoodDelivery/public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="/FoodDelivery/public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="/FoodDelivery/public/js/plugins/jquery-ui/jquery-ui.min.js"></script>
  @if(isset($config['js'])&&is_array($config['js']))
  @foreach($config['js'] as $key => $val)
  {!!'<script src="/FoodDelivery/public/'.$val.'"></script>'!!}
  @endforeach
  @endif