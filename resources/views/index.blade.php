<div class="main-content">
    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới </h1>
    <label for="select-city"></label>
    <select id="select-city">
<option>Chọn thành phố </option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
{{--
        <option value="America-Costa_Rica">Costa Rica</option>
--}}
        <option value="America-Havana">Habana, CUba</option>
        <option value="Asia-Hong_Kong">Hong Kong</option>
        <option value="Asia-Ho_Chi_Minh">Ho chi Minh, Viet Nam</option>
    </select>
</div>
<script>

    document.getElementById("select-city").onchange = function (){
        Choosecity()
    };
    function Choosecity(){
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
