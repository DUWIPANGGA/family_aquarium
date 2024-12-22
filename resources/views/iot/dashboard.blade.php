<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js for charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/card.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <div id="editDeviceForm"
        class="hidden absolute inset-0 bg-white bg-opacity-80 flex justify-center items-center z-10 p-4">
        <form class="bg-gray-100 p-6 rounded shadow-md w-full max-w-xs" method="POST"
            action="{{ route('device.edit') }}">
            @method('put')
            @csrf
            <input type="hidden" id="ID" name="id" value="">
            <h3 class="text-lg font-semibold text-center mb-4">Edit Device</h3>
            <div class="mb-4">
                <label for="deviceId" class="block text-sm font-semibold text-gray-700">Device ID</label>
                <input type="text" id="deviceIdEdit" name="id_device"
                    class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter Device ID" required />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" id="passwordEdit" name="password"
                    class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter Password" required />
            </div>
            <div class="mb-4">
                <label for="deviceName" class="block text-sm font-semibold text-gray-700">Device Name</label>
                <input type="text" id="deviceNameEdit" name="nama_device"
                    class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter Device Name" required />
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Edit Device</button>
                <button type="button" onclick="closeEdit()"
                    class="bg-red-500 text-white px-4 py-2 rounded-md">Cancel</button>
            </div>
        </form>
    </div>
    <div id="deviceForm"
        class="hidden absolute inset-0 bg-white bg-opacity-80 flex justify-center items-center z-10 p-4">
        <form class="bg-gray-100 p-6 rounded shadow-md w-full max-w-xs" method="POST"
            action="{{ route('device.add') }}">
            @csrf
            <h3 class="text-lg font-semibold text-center mb-4">Add Device</h3>
            <div class="mb-4">
                <label for="deviceId" class="block text-sm font-semibold text-gray-700">Device ID</label>
                <input type="text" id="deviceId" name="id_device"
                    class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter Device ID" required />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter Password" required />
            </div>
            <div class="mb-4">
                <label for="deviceName" class="block text-sm font-semibold text-gray-700">Device Name</label>
                <input type="text" id="deviceName" name="nama_device"
                    class="w-full p-2 border border-gray-300 rounded-md" placeholder="Enter Device Name" required />
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Device</button>
                <button type="button" onclick="closeForm()"
                    class="bg-red-500 text-white px-4 py-2 rounded-md">Cancel</button>
            </div>
        </form>
    </div>
        <div class="row" style="display: flex; flex-direction: row; height: 100vh;" >
            @include('template.sidebar')
            <div class="col-md-10 pl-5" style="overflow-x: hidden; height:100vh;" >
                @if (session('success'))
                    <div id="popupAlert" class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" onclick="closePopup()" aria-label="Close"></button>
                    </div>
                @elseif (session('error'))
                    <div id="popupAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" onclick="closePopup()" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row mt-3">
                    <div class=" hidden" id="setup-device">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Daftar Device</h4>
                            <i class="fas fa-x" style="font-size: 1rem; cursor: pointer;" onclick="closeSetup()"></i>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Device ID</th>
                                        <th>Device Name</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($devices as $device)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $device->id_device }}</td>
                                            <td>{{ $device->nama_device }}</td>
                                            <td>
                                                <button data-id_device="{{ $device->id_device }}"
                                                    data-pass="{{ $device->password }}"
                                                    data-name="{{ $device->nama_device }}"
                                                    data-id="{{ $device->id }}" class="btn btn-primary btn-sm"
                                                    onclick="editDevice(this)">Edit</button>
                                                <form action="{{ route('device.delete', $device->id_device) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <section class="h-100 w-100" id="main-device">
                    <section class="card-main d-flex flex-row mb-5 mt-5 gap-3" style="height: 20vh">
                        <div class="col-md-2 h-100">
                            <div class="card border border-primary mb-3 h-100">
                                <div class="card-header bg-primary text-white">Total Device</div>
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <h5 class="card-title" style="font-size: 3rem;">{{ count($devices) }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 h-100">
                            <div class="card border border-success mb-3 h-100">
                                <div class="card-header bg-success text-white">Device Active</div>
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <h5 class="card-title" id="device_active" style="font-size: 3rem;">0</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 h-100">
                            <div class="card border border-warning mb-3 h-100"
                                onclick="window.location.href='/admin/water_quality'">
                                <div class="card-header bg-warning text-white" id="time-now">Data</div>
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <h5 class="card-title" style="font-size: 3rem;"><i class="fas fa-book"></i></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 h-100" onclick="showForm()">
                            <div class="card border border-warning mb-3 h-100">
                                <div class="card-header bg-warning text-white">Add device</div>
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <h5 class="card-title w-100 d-flex justify-center align-center"> <i
                                            class="fas fa-plus fa-2x text-gray-600"></i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 h-100" onclick="showSetup()">
                            <div class="card border border-warning mb-3 h-100">
                                <div class="card-header bg-warning text-white">configure</div>
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <h5 class="card-title w-100 d-flex justify-center align-center"> <i
                                            class="fas fa-gear fa-2x text-gray-600"></i>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="card-main d-flex flex-wrap gap-3">
                        @foreach ($devices as $device)
                            <div class="col-md-6" id="device-{{ $device->id_device }}">
                                <div class="card shadow-lg">
                                    <div class="card-header text-center bg-primary text-white">
                                        <h5>{{ $device->nama_device }} - Monitoring Kualitas Air</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">pH Air</h6>
                                        <div class="progress mb-3">
                                            <div class="progress-bar ph-progress" role="progressbar"
                                                style="width: 0%;" aria-valuenow="7.5" aria-valuemin="0"
                                                aria-valuemax="14">
                                                pH: 0 (Tidak Normal)
                                            </div>
                                        </div>

                                        <h6 class="card-title">Kekeruhan (NTU)</h6>
                                        <div class="progress mb-3">
                                            <div class="progress-bar turbidity-progress" role="progressbar"
                                                style="width: 0%;" aria-valuenow="6" aria-valuemin="0"
                                                aria-valuemax="100">
                                                Kekeruhan: 0 NTU (Jernih)
                                            </div>
                                        </div>

                                        <h6 class="card-title">Status Kualitas Air</h6>
                                        <div class="alert alert-danger text-center status-alert">
                                            <i class="fas fa-times-circle"></i> Kualitas Air Buruk
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted text-center">
                                        <small class="data-time">Data Terkini: 21 Desember 2024</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                    <!-- Charts -->
                </section>
            </div>
    </div>

    <!-- JavaScript and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        var allDevice = @json($devices);
        var userID = @json(Auth::user()->id);
        var mqtt;
        var firstSend=0;
        var reconnectTimeout = 2000;
        var deviceON = [];
        var host = "broker.emqx.io";
        var port = 8083;
        var username = "aquafish_polindra"; // Replace with your username
        var password = "aquafish_polindra"; // Replace with your password
        function onConnect() {
            var allDevice = @json($devices);
            allDevice.forEach(function(device) {
                ping(device.id_device, device.password);
            });
            const cards = document.querySelectorAll('.card-control');
            cards.forEach(card => {
                card.setAttribute('disabled', 'false');
                card.style.cursor = 'pointer';

            });

            mqtt.subscribe("aquafish_polindra/#", {
                onSuccess: function() {
                    console.log("Successfully subscribed to 'aquafish_polindra/#' topic");
                },
                onFailure: function(e) {
                    console.log("Failed to subscribe to 'aquafish_polindra/#' topic", e);
                }
            });

        }

        function updateWaterQuality(deviceId, ph, turbidity) {
            console.log('masuk-1');
            let card = document.getElementById('device-' + deviceId);
            let phProgress = card.querySelector('.ph-progress');
            let turbidityProgress = card.querySelector('.turbidity-progress');
            let statusAlert = card.querySelector('.status-alert');
            let dataTime = card.querySelector('.data-time');

            phProgress.style.width = (ph * 100 / 14) + '%';
            phProgress.setAttribute('aria-valuenow', ph);
            phProgress.innerHTML = `pH: ${ph} (${ph >= 6.5 && ph <= 8.5 ? 'Normal' : 'Tidak Normal'})`;
            turbidityProgress.style.width = (turbidity * 100 / 100) + '%';
            turbidityProgress.setAttribute('aria-valuenow', turbidity);
            turbidityProgress.innerHTML = `Kekeruhan: ${turbidity} NTU (${turbidity <= 10 ? 'Jernih' : 'Keruh'})`;
            if (ph < 6.5 || ph > 9 || turbidity > 15) {
                if(firstSend == 0){
                    sendMail(deviceId, ph, turbidity);
                    firstSend = 1;
                    }
                statusAlert.classList.remove('alert-success');
                statusAlert.classList.add('alert-danger');
                statusAlert.innerHTML = `<i class="fas fa-times-circle"></i> Kualitas Air Buruk`;
            } else {
                statusAlert.classList.remove('alert-danger');
                statusAlert.classList.add('alert-success');
                statusAlert.innerHTML = `<i class="fas fa-check-circle"></i> Kualitas Air Baik`;
            }
            let currentTime = new Date().toLocaleString();
            dataTime.innerHTML = `Data Terkini: ${currentTime}`;
        }

        function onMessageArrived(message) {
            var payload = JSON.parse(message.payloadString);
            if (payload.state == "pong") {
                console.log('device='+payload.ID);
                var device = allDevice.find(device => device.id_device == payload.ID);
                console.log('on='+device);
                if (device) {
                    deviceON.push(device);
                    var deviceFilter = deviceON.filter((value, index, self) => self.indexOf(value) === index);
                    console.log(deviceFilter);
                    document.getElementById("device_active").innerHTML = deviceFilter.length;
                }
            }
            if (payload.hasOwnProperty("type")) {

                var device = allDevice.find(device => device.id_device == payload.ID);
                if (device) {
                    
                console.log("Message payload: " + payload.ID);
                updateWaterQuality(payload.ID, payload.PH, payload.NTU);
                saveWaterQuality(payload.ID, payload.PH, payload.NTU);
                } 
            }
        }

        function mqttConnect() {
            console.log("Connecting to " + host + ":" + port);
            mqtt = new Paho.MQTT.Client(host, port, "clientjs");
            mqtt.onMessageArrived = onMessageArrived;

            var options = {
                timeout: 3,
                userName: username, // Include username
                password: password,
                onSuccess: onConnect, // Callback for successful connection
                onFailure: function(message) {
                    console.log("Connection failed: " + message.errorMessage);
                    setTimeout(mqttConnect, reconnectTimeout);
                }
            };

            mqtt.connect(options);
        }

        function sendMQTT(messages) {
            var message = new Paho.MQTT.Message(messages);
            message.destinationName = "aquafish_polindra/control";
            mqtt.send(message);
        }

        // main
        function showForm() {
            document.getElementById('deviceForm').classList.remove('hidden');
        }

        function closeForm() {
            document.getElementById('deviceForm').classList.add('hidden');
        }

        function showSetup() {
            document.getElementById('setup-device').classList.remove('hidden');
            document.getElementById('main-device').classList.add('hidden');
        }

        function closeSetup() {
            document.getElementById('setup-device').classList.add('hidden');
            document.getElementById('main-device').classList.remove('hidden');
        }


        function closeEdit() {
            document.getElementById('editDeviceForm').classList.add('hidden');
        }

        function sendState(deviceID, state, password) {
            const data = JSON.stringify({
                ID: deviceID,
                pass: password,
                state: state
            });
            sendMQTT(data);
        }

        function ping(deviceID, password) {
            const data = JSON.stringify({
                ID: deviceID,
                pass: password,
                state: "ping"
            });
            sendMQTT(data);
        }



        function editDevice(elemen) {
            var id = elemen.dataset.id;
            var name = elemen.dataset.name;
            var pass = elemen.dataset.pass;
            var id_device = elemen.dataset.id_device;
            var form = document.getElementById("editDeviceForm");
            form.querySelector("#ID").value = id;
            form.querySelector("#deviceIdEdit").value = id_device;
            form.querySelector("#passwordEdit").value = pass;
            form.querySelector("#deviceNameEdit").value = name;
            document.getElementById('editDeviceForm').classList.remove('hidden');
        }
        document.addEventListener('DOMContentLoaded', function() {
            mqttConnect();

            const popupAlert = document.getElementById('popupAlert');
            if (popupAlert) {
                popupAlert.style.display = 'block';
                setTimeout(closePopup, 5000);
            }
        });

        // Fungsi untuk menutup popup
        function closePopup() {
            const popupAlert = document.getElementById('popupAlert');
            if (popupAlert) {
                popupAlert.style.display = 'none';
            }
        }

        function saveWaterQuality(aquarium, pH, turbidity) {
            const data = {
                aquarium: aquarium,
                pH: Number(pH),
                turbidity: Number(turbidity)
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            return fetch('../api/qualities/', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Laravel CSRF token
                    },
                    body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(result => {
                    console.log('Water quality saved successfully:', result);
                    return result;
                })
                .catch(error => {
                    console.error('Error saving water quality:', error);
                    throw error;
                });
        }
        function sendMail(aquarium, pH, turbidity) {
            const data = {
                aquarium: aquarium,
                pH: pH,
                turbidity: turbidity
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            return fetch('../api/send-email', {                                
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Laravel CSRF token
                    },
                    body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(result => {
                    console.log('send mail:', result);
                    return result;
                })
                .catch(error => {
                    console.error('send mail:', error);
                    throw error;
                });
        }
    </script>
</body>

</html>
