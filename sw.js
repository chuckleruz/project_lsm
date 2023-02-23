const staticDev = "dev-bios-v1";
const assets = [
	"./",
	"./index.php",
	"./assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css",
    "./assets/AdminLTE-3.2.0/dist/css/adminlte.min.css",
    "./assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js",
    "./assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js",
    "./assets/AdminLTE-3.2.0/dist/js/adminlte.min.js",
    "./assets/js/app.js",
    "./assets/img/favicon.ico"
	];

self.addEventListener("install", event =>{
    event.waitUntil(caches.open(staticDev).then( cache => {
        cache.addAll(assets);
    }));
})

self.addEventListener( "fetch", event => {
    event.respondWith(
        caches.match(event.request).then( res =>{
            console.log(event.request);
            return res || fetch(event.request);
        } )
    );
});