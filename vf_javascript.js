const propiedades = [
    {
        img: 'vf_img/vf_img1.jpg',
        titulo: 'Propiedad 1',
        descripcion: 'Hermosa casa con vista al mar, 3 habitaciones y 2 baños.'
    },
    {
        img: 'vf_img/vf_img2.jpg',
        titulo: 'Propiedad 2',
        descripcion: 'Apartamento moderno en el centro, ideal para parejas.'
    },
    {
        img: 'vf_img/vf_img3.jpg',
        titulo: 'Propiedad 3',
        descripcion: 'Casa en las montañas, perfecta para amantes de la naturaleza.'
    },
    {
        img: 'vf_img/vf_img4.jpg',
        titulo: 'Propiedad 4',
        descripcion: 'Espaciosa casa de campo con jardín y piscina.'
    },
    {
        img: 'vf_img/vf_img5.jpg',
        titulo: 'Propiedad 5',
        descripcion: 'Apartamento en zona tranquila, cerca de parques y escuelas.'
    },
    {
        img: 'vf_img/vf_img6.jpg',
        titulo: 'Propiedad 6',
        descripcion: 'Villa de lujo con todos los servicios y privacidad garantizada.'
    }
];

let indiceActual = 0;

function vf_mostrarPropiedad() {
    const propiedadActual = document.getElementById('propiedadActual');
    
    propiedadActual.innerHTML = `
        <img src="${propiedades[indiceActual].img}" alt="${propiedades[indiceActual].titulo}">
        <h3>${propiedades[indiceActual].titulo}</h3>
        <p>${propiedades[indiceActual].descripcion}</p>
    `;

    // Actualizar el índice para la próxima propiedad
    indiceActual = (indiceActual + 1) % propiedades.length;
}

// Mostrar la primera propiedad al cargar
vf_mostrarPropiedad();

// Cambiar la propiedad cada 5 segundos
setInterval(vf_mostrarPropiedad, 5000);
