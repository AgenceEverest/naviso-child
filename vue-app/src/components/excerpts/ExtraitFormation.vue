<script>
export default {
  name: "ExtraitDefaut",
  props: {
    cpt: {
      type: Object,
    },
    texteFinCandidature: {
      type: String,
    },
    afficherBoutonFicheDePoste: {
      type: String,
    },
    texteBoutonFicheDePoste: {
      type: String,
    },
    texteEnSavoirPlus: {
      type: String,
    },
    taxonomiesToShow: {
      type: Array,
    },
    texteBoutonFicheFormation: {
      type: String,
    },
    texteCardChampDuree: {
      type: String,
    },
    textCardChampProchaineSession: {
      type: String,
    },
  },
  methods: {
    convertToFrenchDate(dateString) {
      if (dateString) {
        var date = new Date(
          dateString.slice(0, 4),
          dateString.slice(4, 6) - 1,
          dateString.slice(6)
        );
        var options = { year: "numeric", month: "short", day: "numeric" };
        return new Intl.DateTimeFormat("fr-FR", options).format(date);
      }
    },
    /*     taxoIsShowable(taxo) {
      if (taxo[0]) {
        return this.taxonomiesToShow.find((t) => t == taxo[0].taxonomy);
      }
    }, */
  },
};
</script>

<template>
  <div>
    <div class="terms extrait-defaut" v-if="cpt.hasOwnProperty('_embedded')">
      <div
        v-if="cpt.acf.afficher_banniere_avec_du_texte_libre"
        class="banner-texte-libre"
      >
        {{ cpt.acf.banniere_avec_du_texte_libre }}
      </div>
      <template
        v-for="(taxo, index) in cpt._embedded['wp:term']"
        :key="taxo.id"
      >
        <span :class="'term term-' + index" v-for="term in taxo" :key="term.id">
          {{ term.name }}
        </span>
      </template>
    </div>
    <h2>{{ cpt.title.rendered }}</h2>
    <p v-if="cpt.acf.hasOwnProperty('nom_employeur')" class="employeur">
      {{ cpt.acf.nom_employeur }}
    </p>
    <p
      v-if="cpt.acf.hasOwnProperty('description_extrait_de_la_page')"
      class="desc-page"
    >
      {{ cpt.acf.description_extrait_de_la_page }}
    </p>
    <p v-if="cpt.acf.prochaine_session">
      {{ textCardChampProchaineSession }} :
      {{ cpt.acf.prochaine_session }}
    </p>
    <p v-if="cpt.acf.duree">
      {{ texteCardChampDuree }} :
      {{ cpt.acf.duree }}
    </p>

    <div class="buttons-extrait">
      <p
        v-if="cpt.acf.fichier_a_telecharger !== ''"
        class="cta_btn_lead cta_ternaire"
      >
        <a
          target="_blank"
          v-if="cpt.acf.hasOwnProperty('fichier_a_telecharger')"
          :href="cpt.acf.fichier_a_telecharger"
          >{{ texteBoutonFicheFormation }}</a
        >
      </p>
      <p class="cta_btn_lead cta_primaire">
        <a :href="cpt.link">{{ texteEnSavoirPlus }}</a>
      </p>
    </div>
  </div>
</template>

<style></style>
