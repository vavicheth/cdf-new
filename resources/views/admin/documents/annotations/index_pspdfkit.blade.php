<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <!-- 1. Include required files. -->
    <script src="{{asset('js/plugins/pspdfkit/pspdfkit.js')}}"></script>

    <!-- Provide proper viewport information so that the layout works on mobile devices. -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
</head>
<body>
<!-- 2. Element where PSPDFKit will be mounted. -->
<div id="pspdfkit" style="width: 100%; height: 1024px"></div>

<!-- 3. Initialize PSPDFKit. -->
<script>
    PSPDFKit.load({
        container: "#pspdfkit",
        document: "{{$media->getUrl()}}",
        // authPayload: { jwt: "<jwt>" },
        instant: true,
        licenseKey:"p7vU6IriPUg-yhI3Wa2Pi1Vw4oFpk0RCvt3b16Tho9r450JJzlcIsYWN_NumJhwgJY1MAYION4gEecnp7hw2PH_qxKxP1-6yDPZeTJjFi9UkfJJdTQoZKGY4i06NI-wutxkFEPBweeAyLmMlhKe9O3LfoJF4_zfu6cTihYHHM93fSsCQz7Yw9UFZaJsv8YAv5KUUW9ohytgRGx-UBP-24wuITzH7sf8SUxDiR7uNIN_kHdxkhpo5mMUPQQWX7m-vpm7MDtQuB3f1jOat59SiiNXNDPOHn8NuAZ93vpnYs-tqGd-tR0DqHcobophlTslxYIzVnUMFlp1BaUsP7DjKJaqX758HMLQgHXJ797jZXbyfdyBw1f50u6bSWLIIUPixAHaDBtYdDqog0lj4VY0B7K2eQMPJc6bJMi-3AlUg01r5LqX1tXiEw5HePFcgdzeANfE5_EoTsmYlpgPE5xxmiw==",
    })
        .then(function(instance) {
            console.log("PSPDFKit loaded", instance);
        })
        .catch(function(error) {
            console.error(error.message);
        });
</script>
</body>
</html>
