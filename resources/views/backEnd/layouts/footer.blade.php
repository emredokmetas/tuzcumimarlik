</div>
</div>
</div>

<!-- BEGIN: Vendor JS-->
<script src={{asset("backend/app-assets/vendors/js/vendors.min.js")}}></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset("backEnd/app-assets/vendors/js/ui/jquery.sticky.js") }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src={{asset("backend/app-assets/js/scripts/configs/vertical-menu-dark.js")}}></script>
<script src={{asset("backend/app-assets/js/core/app-menu.js")}}></script>
<script src={{asset("backend/app-assets/js/core/app.js")}}></script>
<script src={{asset("backend/app-assets/js/scripts/components.js")}}></script>
<script src={{asset("backend/app-assets/js/scripts/footer.js")}}></script>
<script src={{asset("backend/app-assets/js/scripts/customizer.min.js")}}></script>


<!-- END: Theme JS-->

<!-- END: Page JS-->

@yield("js")

<script src={{asset("backend/js/custom.js")}}></script>
</body>
</html>
