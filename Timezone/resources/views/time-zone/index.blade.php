<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="main-content">
    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
    <label for="select-city"></label>
    <select id="select-city">
        <option>Chọn thành phố</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value= "America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">Hồng Kông</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
    </select>
</div>
<script>
    document.getElementById('select-city').onchange = function () {
        chooseCity();
    }

    function chooseCity() {
        let timeZone = document.getElementById('select-city');
        window.location.href = timeZone.value;
    }
</script>
