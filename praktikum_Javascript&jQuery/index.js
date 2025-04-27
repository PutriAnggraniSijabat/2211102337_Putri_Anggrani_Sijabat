var nama = "Febrilia"; // Global scope
let umur = 21;          // Block scope
const kota = "Purwokerto";

if (umur > 18) {
    console.log("Dewasa");
} else {
    console.log("Anak-anak");
}

for (let i = 0; i < 5; i++) {
    console.log(i);
}

let j = 0;
while (j < 5) {
    console.log(j);
    j++;
}

function sapa(nama) {
    return "Halo, " + nama;
}

console.log(sapa("Febrilia"));

const mahasiswa = {
    nama: "Febrilia",
    umur: 21,
    sapa: function () {
        return "Halo, saya " + this.nama;
    }
};

console.log(mahasiswa.sapa());
