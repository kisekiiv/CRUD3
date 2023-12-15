
<nav>
    <div class="logo"><a class="{{ (request()->segment('1')=='' || request()->segment('1')=='home') ? 'active' : '' }}" href="/">SDKI</a></div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a class="{{ (request()->segment('1')=='' || request()->segment('1')=='home') ? 'active' : '' }}" aria-current="page" href="{{ url('home') }}">Home</a></li>
      <li><a class="{{ (request()->segment('1')=='contact') ? 'active' : '' }}" aria-current="page" href="{{ url('contact')  }}" >Contact</a></li>
      <li><a class="{{ (request()->segment('1')=='about') ? 'active' : '' }}" aria-current="page" href="{{ url('about')  }}" >About</a></li>
      <li><a href="/login"><i class="fas fa-lock"></i> Login</a></li>
    </ul>
  </nav>
    
  