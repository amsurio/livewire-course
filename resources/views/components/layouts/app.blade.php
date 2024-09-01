<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PROKIT|Dashboard</title>
  @livewireStyles
  @vite(['resources/js/app.js'])

  @script
  <script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
      document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
      var input, filter, ul, li, a, i;
      input = document.getElementById(myDropMenuSearch);
      filter = input.value.toUpperCase();
      div = document.getElementById(myDropMenu);
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
        var dropdowns = document.getElementsByClassName("dropdownlist");
        for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (!openDropdown.classList.contains('invisible')) {
            openDropdown.classList.add('invisible');
          }
        }
      }
    }

  </script>
  @endscript
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
  {{ $slot }}
  @livewireScriptConfig
</body>
</html>
