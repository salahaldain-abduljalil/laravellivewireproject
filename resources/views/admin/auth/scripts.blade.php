
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset("admin-assets")}}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset("admin-assets")}}/vendor/libs/popper/popper.js"></script>
    <script src="{{asset("admin-assets")}}/vendor/js/bootstrap.js"></script>
    <script src="{{asset("admin-assets")}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{asset("admin-assets")}}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{asset("admin-assets")}}/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>



    {{-- hook script  --}}
  <script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('morph.updated', (component) => {
            const mysuccessalert = document.querySelector('.my-sucess-alert');
            if (mysuccessalert) {
                setTimeout(() => {

                    mysuccessalert.style.display = 'none';

                }, 2000);
            }



        });

    });

    window.addEventListener('CreateModalToggle', event => {

        $('#createModal').modal('toggle');


    });
</script>


