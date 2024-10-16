<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
    input && window.intlTelInput(input, {
        loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
    });
</script>
<!-- JavaScript for intlTelInput -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
<script src="./scripts/custom-phone.js"></script>

<script type="module" src="./scripts/main.js"></script>
<!-- <script src="./scripts/main.js"></script> -->
</body>

</html>