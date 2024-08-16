<!-- resources/views/location.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dependent Dropdown</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form>
        <select id="province" name="province">
            <option value="">Select Province</option>
        </select>

        <select id="city" name="city">
            <option value="">Select City</option>
        </select>

        <select id="district" name="district">
            <option value="">Select District</option>
        </select>

        <select id="village" name="village">
            <option value="">Select Village</option>
        </select>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Load provinces on page load
            $.ajax({
                url: '/provinces',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data); // Check data
                    $('#province').append(data.map(province => `<option value="${province.id}">${province.name}</option>`));
                },
                error: function (error) {
                    console.log(error); // Check error
                }
            });

            $('#province').on('change', function () {
                let provinceId = this.value;
                $('#city').html('<option value="">Select City</option>');
                $('#district').html('<option value="">Select District</option>');
                $('#village').html('<option value="">Select Village</option>');

                if (provinceId) {
                    $.ajax({
                        url: '/cities/' + provinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data); // Check data
                            $('#city').append(data.map(city => `<option value="${city.id}">${city.name}</option>`));
                        },
                        error: function (error) {
                            console.log(error); // Check error
                        }
                    });
                }
            });

            $('#city').on('change', function () {
                let cityId = this.value;
                $('#district').html('<option value="">Select District</option>');
                $('#village').html('<option value="">Select Village</option>');

                if (cityId) {
                    $.ajax({
                        url: '/districts/' + cityId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data); // Check data
                            $('#district').append(data.map(district => `<option value="${district.id}">${district.name}</option>`));
                        },
                        error: function (error) {
                            console.log(error); // Check error
                        }
                    });
                }
            });

            $('#district').on('change', function () {
                let districtId = this.value;
                $('#village').html('<option value="">Select Village</option>');

                if (districtId) {
                    $.ajax({
                        url: '/villages/' + districtId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data); // Check data
                            $('#village').append(data.map(village => `<option value="${village.id}">${village.name}</option>`));
                        },
                        error: function (error) {
                            console.log(error); // Check error
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
