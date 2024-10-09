
// 3 saniye sonra alert kutusunu gizler
setTimeout(function() {
    var alertBox = document.getElementById('success-alert');
    if (alertBox) {
        alertBox.style.display = 'none';
    }
}, 3000);

// Manuel kapatma butonu
document.querySelector('.close-btn').addEventListener('click', function() {
    document.getElementById('success-alert').style.display = 'none';
});

