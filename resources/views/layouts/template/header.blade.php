<div class="content-header flex justify-between items-center gap-[20px] px-[30px] py-[10px] border shadow">
    <div class="text-start">
        <p class="welcome">Selamat Datang,</p>
        <p class="name font-bold text-[20px]">Khairul Kholqi</p>
    </div>

    <div>
        <p id="currentDate"></p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const truncateText = (element, charLimit) => {
            const text = element.innerText;
            if (text.length > charLimit) {
                const truncated = text.slice(0, charLimit) + '...';
                element.innerText = truncated;
            }
        };

        const nameElements = document.querySelectorAll('.name');
        nameElements.forEach(element => truncateText(element, 15));
        displayCurrentDate();
    });

    function displayCurrentDate() {
        let today = new Date();
        let day = today.getDate();
        let month = today.getMonth() + 1;
        let year = today.getFullYear();

        // Array to map month index to month name
        const monthNames = [
            "Januari", "Februari", "Maret",
            "April", "Mei", "Juni", "Juli",
            "Agustus", "September", "Oktober",
            "November", "Desember"
        ];

        // Array to map day index to day name
        const dayNames = [
            "Minggu", "Senin", "Selasa",
            "Rabu", "Kamis", "Jumat", "Sabtu"
        ];

        // Get day name using getDay() method
        let dayName = dayNames[today.getDay()];

        if (day < 10) {
            day = '0' + day;
        }

        if (month < 10) {
            month = '0' + month;
        }

        let formattedDate = `${dayName}, ${day} ${monthNames[month - 1]} ${year}`;

        document.getElementById('currentDate').textContent = formattedDate;
    }
</script>

<style>
    @media (max-width: 500px) {
        #currentDate,
        .welcome {
            font-size: 13px;
        }

        .name {
            font-size: 15px
        }
    }

    @media (max-width: 430px) {
        #currentDate,
        .welcome {
            font-size: 11px;
        }

        .name {
            font-size: 13px
        }
    }

    @media (max-width: 380px) {
        #currentDate,
        .welcome {
            font-size: 10px;
        }

        .name {
            font-size: 11px
        }
    }

    @media (max-width: 350px) {
        .content-header {
            padding-left: 10px;
        }

        .content-header {
            padding-right: 10px;
        }
    }
</style>
