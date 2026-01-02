export default {
  extends: ["stylelint-config-standard-scss"],
  plugins: ["stylelint-order"],
  rules: {
    // Disable overly strict rules to work with existing codebase
    "scss/dollar-variable-pattern": null,
    "scss/at-mixin-pattern": null,
    "scss/at-extend-no-missing-placeholder": null,
    "scss/no-global-function-names": null,
    "scss/operator-no-newline-after": null,
    "selector-id-pattern": null,
    "no-duplicate-selectors": null,
    "declaration-block-no-duplicate-custom-properties": null,
    "selector-class-pattern": null,
    "declaration-block-no-redundant-longhand-properties": null,
    // Modern CSS features - allow unknown properties for newer features
    "property-no-unknown": [
      true,
      {
        ignoreProperties: [
          "container",
          "container-type",
          "container-name",
          /^--/,
        ],
      },
    ],

    // SCSS specific
    "scss/at-rule-no-unknown": [
      true,
      {
        ignoreAtRules: ["container"],
      },
    ],

    // CSS custom properties
    "custom-property-pattern": null,

    // Function notation
    "function-url-quotes": "always",

    // Values
    "length-zero-no-unit": true,
    "number-max-precision": 3,

    // Nesting depth - relaxed
    "max-nesting-depth": 6,

    // Comments
    "comment-empty-line-before": null,
    "comment-whitespace-inside": "always",
  },

  ignoreFiles: ["style.css", "style.css.map", "node_modules/**/*"],
};
