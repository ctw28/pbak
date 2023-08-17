<button onclick="importData()">Import</button>

<script>
    async function importData() {

        // let url = "{{route('sinkron')}}";
        // let dataSend2 = new FormData()
        // // dataSend2.append('data', JSON.stringify(item))
        // let sendRequest2 = await fetch(url, {
        //     method: "POST",
        //     body: dataSend2
        // })
        // let response2 = await sendRequest2.json()
        // console.log(response2);
        // return



        let dataSend = new FormData()
        dataSend.append('filter', '20231')
        // let sendRequest = await fetch("https://sia.iainkendari.ac.id/konseling_api/eksport_mahasiswa_dari_sia_tambahan", {
        let sendRequest = await fetch("https://sia.iainkendari.ac.id/konseling_api/eksport_mahasiswa_dari_sia", {
            method: "POST",
            body: dataSend
        })
        let response = await sendRequest.json()
        console.log(response);
        // return
        response.data.map(async (item, index) => {
            // if (index == 0) {
            // console.log(item);
            // return console.log('ggwp');
            let url = "{{route('sinkron')}}";
            let dataSend2 = new FormData()
            dataSend2.append('data', JSON.stringify(item))
            let sendRequest2 = await fetch(url, {
                method: "POST",
                body: dataSend2
            })
            let response2 = await sendRequest2.json()
            console.log(response2);
            // }
            // console.log(item.nama);
        })
    }
</script>