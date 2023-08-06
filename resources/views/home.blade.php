<!DOCTYPE html>

<!-- Authentication Links -->
@guest
@if (Route::has('login'))
<div class="nav-item">
  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</div>
@endif

@if (Route::has('register'))
<div>
  <a href="{{ route('register') }}">{{ __('Register') }}</a>
</div>
@endif
@else

<div>
  <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}</a>
</div>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
</a>
<form href="{{ route('logout') }}" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
</div>
</li>
@endguest
</ul>
</div>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Choose the Right Plan</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/bootstrap.js"></script>
</head>

<body>

  <div style="width:60%; margin:0 auto;">
    <div class="intro-text">
      <h1 class="text-center">Choose the right plan for you</h1>
    </div>

    <div>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="table table_text">
        <thead>
          <tr>
            <th width="36%">
              <div class="switch-wrapper">
                <input id="monthly" type="radio" name="switch" checked>
                <input id="yearly" type="radio" name="switch">
                <label for="monthly">Monthly</label>
                <label for="yearly">Yearly</label>
                <span class="highlighter"></span>
              </div>
            </th>
            <th width="16%">
              <div href="#" id="mobile" class="tab_menu_btn_reg tab_menu_btn_act tab_menu_btn_act_bottom" onclick="buttonSelected('mobile')"> Mobile</div>
            </th>
            <th width="16%">
              <div href="#" id="basic" class="tab_menu_btn_reg" onclick="buttonSelected('basic')">Basic</div>
            </th>
            <th width="16%">
              <div href="#" id="standard" class="tab_menu_btn_reg" onclick="buttonSelected('standard')">Standard</div>
            </th>
            <th width="16%">
              <div href="#" id="premium" class="tab_menu_btn_reg" onclick="buttonSelected('premium')">Premium</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($subscription_plans as $subscription_plan) : ?>
          <tr>
            <td>
              {{$subscription_plan->plan_type}}
            </td>
            <td>
              <span> {{$subscription_plan->mobile}}</span>
              <!-- <span class="blue_txt_act"> {{$subscription_plan->mobile}}</span> -->
            </td>
            <td>
              {{$subscription_plan->basic}}
            </td>
            <td>
              {{$subscription_plan->standard}}
            </td>
            <td>
              {{$subscription_plan->premium}}
            </td>
          </tr>
          <?php endforeach; ?>
          <!-- <tr>
                  <td>
                    Monthly Price
                  </td>
                  <td>
                    <span class="blue_txt_act"> ₹ 1000 </span>
                  </td>
                  <td>
                    ₹ 2000
                  </td>
                  <td>
                    ₹ 50000
                  </td>
                  <td>
                    ₹ 70000
                  </td>          
                </tr>
                <tr>
                  <td>
                    Video Quality
                  </td>
                  <td>
                    <span class="blue_txt_act"> Good</span>
                  </td>
                  <td>
                    Good
                  </td>
                  <td>
                    Better
                  </td>
                  <td>
                    Best
                  </td>          
                </tr>
                <tr>
                  <td>
                    Resolution
                  </td>
                  <td>
                    <span class="blue_txt_act"> 480p</span>
                  </td>
                  <td>
                    480p
                  </td>
                  <td>
                    1080p
                  </td>
                  <td>
                    4K+HDR
                  </td>          
                </tr> -->
          <tr>
            <td>
              Devices you can use to watch
            </td>
            <td>
              <span> Phone</span>
              <!-- <span class="blue_txt_act"> Phone</span> -->
            </td>
            <td>
              Phone
            </td>
            <td>
              Phone
            </td>
            <td>
              Phone
            </td>
          </tr>
          <tr>
            <td>

            </td>
            <td>
              <span> Tablet</span>

              <!-- <span class="blue_txt_act"> Tablet</span> -->
            </td>
            <td>
              Tablet
            </td>
            <td>
              Tablet
            </td>
            <td>
              Tablet
            </td>
          </tr>
          <tr>
            <td>

            </td>

            <td>

            </td>
            <td>
              Computer
            </td>
            <td>
              Computer
            </td>
            <td>
              Computer
            </td>
          </tr>
          <tr>
            <td>

            </td>
            <td>

            </td>
            <td>
              TV
            </td>
            <td>
              TV
            </td>
            <td>
              TV
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="text-center">
      <a href="stripe" class="btn btn-primary wid40p">Next </a>
    </div>

  </div>

</body>

</html>
<script>
  function buttonSelected(value) {
    var list_selected = ["mobile", "basic", "standard", "premium"];
    list_selected.forEach(element => {
      document.getElementById(element).classList.remove('tab_menu_btn_act_bottom');
      document.getElementById(element).classList.remove('tab_menu_btn_act');
    });
    document.getElementById(value).classList.add('tab_menu_btn_act');
    document.getElementById(value).classList.add('tab_menu_btn_act_bottom');
  }
</script>