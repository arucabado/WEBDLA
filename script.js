function updateTimes() {
    const timeZones = [
        { country: "America/Matamoros", user: "Franco", id: "acuna_time" },
        { country: "America/Guatemala", user: "Madmax", id: "guatemala_time" },
        { country: "America/Bogota", user: "Silva", id: "colombia_time" },
        { country: "America/Caracas", user: "Marcos", id: "venezuela_time" },
        { country: "America/Santo_Domingo", user: "Thanos", id: "repdom_time" },
        { country: "America/Asuncion", user: "Dany", id: "paraguay_time" },
        { country: "America/Santiago", user: "Thexodermo", id: "chile_time" },
        { country: "America/Monterrey", user: "Arucabado", id: "monterrey_time" },
        { country: "Europe/Madrid", user: "Paraguas", id: "espana_time" },
        // Agrega más zonas horarias aquí
    ];

    timeZones.forEach((zone) => {
        const element = document.getElementById(zone.id);
        const time = new Date().toLocaleString("en-US", {
            timeZone: zone.country,
            hour: "numeric",
            minute: "numeric",
            second: "numeric",
            hour12: true, // Formato AM/PM
        });
        element.textContent = time;
    });

    setTimeout(updateTimes, 1000); // Actualiza la hora cada segundo
}

updateTimes();