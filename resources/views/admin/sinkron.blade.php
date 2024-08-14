<button onclick="importData()">Import</button>

<script>
    async function importData() {
        let dataSend = new FormData();
        dataSend.append('filter', '20241');
        let sendRequest = await fetch("https://sia.iainkendari.ac.id/konseling_api/eksport_mahasiswa_dari_sia", {
            method: "POST",
            body: dataSend
        });
        let response = await sendRequest.json();
        const batchSize = 100;
        for (let i = 0; i < response.data.length; i += batchSize) {
            let batch = response.data.slice(i, i + batchSize);
            await syncBatch(batch);
        }
    }

    async function syncBatch(batch) {
        for (let item of batch) {
            let url = "{{route('sinkron')}}";
            let dataSend2 = new FormData();
            dataSend2.append('data', JSON.stringify(item));
            let sendRequest2 = await fetch(url, {
                method: "POST",
                body: dataSend2
            });
            let response2 = await sendRequest2.json();
            console.log(response2);
        }
    }
</script>