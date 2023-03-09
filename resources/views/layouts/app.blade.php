<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('bootstrap/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        @livewireStyles
    </head>
    <body class="sb-nav-fixed">
        <div>
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('bootstrap/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('bootstrap/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('bootstrap/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('bootstrap/js/datatables-simple-demo.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
                window.addEventListener('swal:modal', event=> {
                    swal({
                        title: event.detail.title,
                        text: event.detail.text,
                        icon:  event.detail.icon,
                    });
                });

                window.addEventListener('modal-toggle', event=> {
                    $('#'+event.detail.id).modal(event.detail.action);
                })

        </script>

        @if ( session()->has('alert_success') )
          <script>
              swal({
                  title: "{{ session()->get('alert_success')['messsage'] }}",
                  text:  "{{ session()->get('alert_success')['text'] }}",
                  icon: 'success',
              });
          </script>
        @endif

        @livewireScripts
    </body>
</html>
