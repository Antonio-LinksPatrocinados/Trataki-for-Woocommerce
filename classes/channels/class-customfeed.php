<?php
/**
 * Settings for Custom product feeds
 */
class WooSEA_customfeed {
	public $customfeed;

        public static function get_channel_attributes() {
                $sitename = get_option('blogname');

        $customfeed = array(
			"Basic product data" => array(
				"Product ID" => array(
					"name" => "id",
					"feed_name" => "id",
					"format" => "required",
					"woo_suggest" => "id",
				),
            	"Product title" => array(
					"name" => "title",
					"feed_name" => "title",
					"format" => "required",
					"woo_suggest" => "title",
				),
            	"Product description" => array(
					"name" => "description",
					"feed_name" => "description",
					"format" => "required",
					"woo_suggest" => "description",
            	),
            	"Product Short Description" => array(
					"name" => "short_description",
					"feed_name" => "short_description",
					"format" => "required",
					"woo_suggest" => "short_description",
            	),
		"Product URL" => array(
					"name" => "link",
					"feed_name" => "link",
					"format" => "required",
					"woo_suggest" => "link",
            	),
            	"Main image URL" => array(
					"name" => "image_link",
					"feed_name" => "image_link",
					"format" => "required",
					"woo_suggest" => "image",
				),
				"Additional image URL" => array(
					"name" => "additional_image_link",
					"feed_name" => "additional_image_link",
					"format" => "optional",
				),
				"Canonical product URL" => array(
					"name" => "canonical_link",
					"feed_name" => "canonical_link", 
					"format" => "optional",
				),
				"Product URL mobile" => array(
					"name" => "mobile_link",
					"feed_name" => "mobile_link", 
					"format" => "optional",
				),
				"SKU" => array(
					"name" => "sku",
					"feed_name" => "sku", 
					"format" => "required",
					"woo_suggest" => "sku",
				),
			),
			"Preço e Disponibilidade" => array(
            	"Estado de Stock" => array(
					"name" => "availability",
					"feed_name" => "availability", 
					"format" => "required",
					"woo_suggest" => "availability",
            	),
            	"Visibilidade no Catálogo" => array(
					"name" => "catalog_visibility",
					"feed_name" => "catalog_visibility", 
					"format" => "required",
					"woo_suggest" => "visibility",
            	),

            	"Gerir Stock" => array(
					"name" => "manage_stock",
					"feed_name" => "manage_stock", 
					"format" => "required",
					"woo_suggest" => "custom_attributes__manage_stock",
            	),
            	"Quantidade Stock" => array(
					"name" => "stock_qty",
					"feed_name" => "stock_qty", 
					"format" => "required",
					"woo_suggest" => "quantity",
            	),
            	"Backorders" => array(
					"name" => "backorders",
					"feed_name" => "backorders", 
					"format" => "required",
					"woo_suggest" => "custom_attributes__backorders",
            	),
            	"Vendido Individualmente" => array(
					"name" => "sold_individually",
					"feed_name" => "sold_individually", 
					"format" => "required",
					"woo_suggest" => "custom_attributes__sold_individually",
            	),
				"Availability date" => array(
					"name" => "availability_date",
					"feed_name" => "availability_date",
					"format" => "optional",
				),
				"Expiration date" => array(
					"name" => "expiration_date",
					"feed_name" => "expiration_date",
					"format" => "optional",
				),
				"Price" => array(
					"name" => "Price",
					"feed_name" => "price",
					"format" => "required",
					"woo_suggest" => "price",
				),
				"Sale price" => array(
					"name" => "sale_price",
					"feed_name" => "sale_price",
					"format" => "required",
					"woo_suggest" => "sale_price",
				),
				"Sale price effective date" => array(
					"name" => "sale_price_effective_date",
					"feed_name" => "sale_price_effective_date",
					"format" => "optional",
					"woo_suggest" => "sale_price_effective_date",
				),
				"Unit pricing measure" => array(
					"name" => "unit_pricing_measure",
					"feed_name" => "unit_pricing_measure",
					"format" => "optional",
				),
				"Unit pricing base measure" => array(
					"name" => "unit_pricing_base_measure",
					"feed_name" => "unit_pricing_base_measure",
					"format" => "optional",
				),
				"Cost of goods sold" => array(
					"name" => "cost_of_goods_sold",
					"feed_name" => "cost_of_goods_sold",
					"format" => "optional",
				),
				"Installment" => array(
					"name" => "installment",
					"feed_name" => "installment",
					"format" => "optional",
				),
				"Subscription cost" => array(
					"name" => "subscription_cost",
					"feed_name" => "subscription_cost",
					"format" => "optional",
				),
				"Loyalty points" => array(
					"name" => "loyalty_points",
					"feed_name" => "loyalty_points",
					"format" => "optional",
				),
				"Virtual ?" => array(
					"name" => "virtual",
					"feed_name" => "virtual",
					"format" => "required",
					"woo_suggest" => "custom_attributes__virtual",
				),
				"Download" => array(
					"name" => "download",
					"feed_name" => "download",
					"format" => "required",
					"woo_suggest" => "custom_attributes__downloadable",
				),
				"Download Files" => array(
					"name" => "download_files",
					"feed_name" => "download_files",
					"format" => "required",
					"woo_suggest" => "custom_attributes__downloadable_files",
				),
			),
			"Product category" => array(
				"Google product category" => array(
					"name" => "google_product_category",
					"feed_name" => "google_product_category",
					"format" => "required",
					"woo_suggest" => "categories",
				),
				"Product type" => array(
					"name" => "product_type",
					"feed_name" => "product_type",
					"format" => "required",
					"woo_suggest" => "product_type",
				),
			),
			"Product identifiers" => array(
				/*
				"Brand" => array(
					"name" => "brand",
					"feed_name" => "brand",
					"format" => "required",
				),
				"Gtin" => array(
					"name" => "gtin",
					"feed_name" => "gtin",
					"format" => "required",
				),
				"MPN" => array(
					"name" => "mpn",
					"feed_name" => "mpn",
					"format" => "required",
				),
				*/
				"Identifier exists" => array(
					"name" => "identifier_exists",
					"feed_name" => "identifier_exists",
					"woo_suggest" => "calculated",
					"format" => "required",
				),
			),
			"Detailed product description" => array(
				"Condition" => array(
					"name" => "condition",
					"feed_name" => "condition",
					"format" => "required",
					"woo_suggest" => "condition",
				),
				"Adult" => array(
					"name" => "adult",
					"feed_name" => "adult",
					"format" => "optional",
				),
				"Multipack" => array(
					"name" => "multipack",
					"feed_name" => "multipack",
					"format" => "optional",
				),
				"Is bundle" => array(
					"name" => "is_bundle",
					"feed_name" => "is_bundle",
					"format" => "optional",
				),
				"Energy efficiency class" => array(
					"name" => "energy_efficiency_class",
					"feed_name" => "energy_efficiency_class",
					"format" => "optional",
				),
				"Minimum energy efficiency class" => array(
					"name" => "min_energy_efficiency_class",
					"feed_name" => "min_energy_efficiency_class",
					"format" => "optional",
				),
				"Maximum energy efficiency class" => array(
					"name" => "max_energy_efficiency_class",
					"feed_name" => "max_energy_efficiency_class",
					"format" => "optional",
				),
				"Age group" => array(
					"name" => "age_group",
					"feed_name" => "age_group",
					"format" => "optional",
				),
				"Color" => array(
					"name" => "color",
					"feed_name" => "color",
					"format" => "optional",
				),
				"Gender" => array(
					"name" => "gender",
					"feed_name" => "gender",
					"format" => "optional",
				),
				"Material" => array(
					"name" => "material",
					"feed_name" => "material",
					"format" => "optional",
				),
				"Pattern" => array(
					"name" => "pattern",
					"feed_name" => "pattern",
					"format" => "optional",
				),
				"Size" => array(
					"name" => "size",
					"feed_name" => "size",
					"format" => "optional",
				),
				"Size type" => array(
					"name" => "size_type",
					"feed_name" => "size_type",
					"format" => "optional",
				),
				"Size system" => array(
					"name" => "size_system",
					"feed_name" => "size_system",
					"format" => "optional",
				),
				"Item group ID" => array(
					"name" => "item_group_id",
					"feed_name" => "item_group_id",
					"format" => "required",
					"woo_suggest" => "item_group_id",
				),
				"Etiquetas de Produto" => array(
					"name" => "product_tag",
					"feed_name" => "product_tag",
					"format" => "required",
					"woo_suggest" => "product_tag",
				),
				"Upsells (Produtos alternativos ao produto em questão, normalmente melhores)" => array(
					"name" => "custom_attributes__upsell_ids",
					"feed_name" => "custom_attributes__upsell_ids",
					"format" => "required",
					"woo_suggest" => "custom_attributes__upsell_ids",
				),
				"Crossells (Produtos que normalmente são comprados junto com o produto em questão.)" => array(
					"name" => "custom_attributes__crosssell_ids",
					"feed_name" => "custom_attributes__crosssell_ids",
					"format" => "required",
					"woo_suggest" => "custom_attributes__crosssell_ids",
				),
				"Palavra Chave - Optimização" => array(
					"name" => "custom_attributes__yoast_wpseo_focuskw_text_input",
					"feed_name" => "custom_attributes__yoast_wpseo_focuskw_text_input",
					"format" => "required",
					"woo_suggest" => "custom_attributes__yoast_wpseo_focuskw_text_input",
				),
				"Descrição - Optimização" => array(
					"name" => "custom_attributes__yoast_wpseo_metadesc",
					"feed_name" => "custom_attributes__yoast_wpseo_metadesc",
					"format" => "required",
					"woo_suggest" => "custom_attributes__yoast_wpseo_metadesc",
				),
				"Quantidade Mínima" => array(
					"name" => "custom_attributes_minimum_allowed_quantity",
					"feed_name" => "custom_attributes_minimum_allowed_quantity",
					"format" => "required",
					"woo_suggest" => "custom_attributes_minimum_allowed_quantity",
				),
				"Quantidade Máxima" => array(
					"name" => "custom_attributes_maximum_allowed_quantity",
					"feed_name" => "custom_attributes_maximum_allowed_quantity",
					"format" => "required",
					"woo_suggest" => "custom_attributes_maximum_allowed_quantity",
				),
				"Quantidade Máxima" => array(
					"name" => "custom_attributes_maximum_allowed_quantity",
					"feed_name" => "custom_attributes_maximum_allowed_quantity",
					"format" => "required",
					"woo_suggest" => "custom_attributes_maximum_allowed_quantity",
				),
				"Grupos de: " => array(
					"name" => "custom_attributes_group_of_quantity",
					"feed_name" => "custom_attributes_group_of_quantity",
					"format" => "required",
					"woo_suggest" => "custom_attributes_group_of_quantity",
				),
				"Ignorar para Min/Max Produtos Encomenda" => array(
					"name" => "minmax_do_not_count",
					"feed_name" => "minmax_do_not_count",
					"format" => "required",
					"woo_suggest" => "custom_attributes_minmax_do_not_count",
				),
				"Excluír de Min/Max Produtos Encomenda" => array(
					"name" => "minmax_cart_exclude",
					"feed_name" => "minmax_cart_exclude",
					"format" => "required",
					"woo_suggest" => "custom_attributes_minmax_cart_exclude",
				),
				"Excluír de contagem categoria de produtos" => array(
					"name" => "minmax_category_group_of_exclude",
					"feed_name" => "minmax_category_group_of_exclude",
					"format" => "required",
					"woo_suggest" => "custom_attributes_minmax_category_group_of_exclude",
				),
				"Avaliações" => array(
					"name" => "enable_reviews",
					"feed_name" => "enable_reviews",
					"format" => "required",
					"woo_suggest" => "custom_attributes__wp_trash_meta_comments_status",
				),
				"Ordem Personalizada" => array(
					"name" => "ordem_personalizada",
					"feed_name" => "ordem_personalizada",
					"format" => "required",
					"woo_suggest" => "menu_order",
				),
				"Nota de Compra" => array(
					"name" => "nota_compra",
					"feed_name" => "nota_compra",
					"format" => "required",
					"woo_suggest" => "custom_attributes__purchase_note",
				),
			),
			"Shopping campaigns" => array(
				"Adwords redirect (old)" => array(
					"name" => "adwords_redirect",
					"feed_name" => "adwords_redirect",
					"format" => "optional",
				),
				"Ads redirect (new)" => array(
					"name" => "ads_redirect",
					"feed_name" => "ads_redirect",
					"format" => "optional",
				),
				"Excluded destination" => array(
					"name" => "excluded_destination",
					"feed_name" => "excluded_destination",
					"format" => "optional",
				),
				"Custom label 0" => array(
					"name" => "custom_label_0",
					"feed_name" => "custom_label_0",
					"format" => "optional",
				),
				"Custom label 1" => array(
					"name" => "custom_label_1",
					"feed_name" => "custom_label_1",
					"format" => "optional",
				),
				"Custom label 2" => array(
					"name" => "custom_label_2",
					"feed_name" => "custom_label_2",
					"format" => "optional",
				),
				"Custom label 3" => array(
					"name" => "custom_label_3",
					"feed_name" => "custom_label_3",
					"format" => "optional",
				),
				"Custom label 4" => array(
					"name" => "custom_label_4",
					"feed_name" => "custom_label_4",
					"format" => "optional",
				),
				"Promotion ID" => array(
					"name" => "promotion_id",
					"feed_name" => "promotion_id",
					"format" => "optional",
				),
				"Included destination" => array(
					"name" => "included_destination",
					"feed_name" => "included_destination",
					"format" => "optional",
				),
				"Excluded destination" => array(
					"name" => "excluded_destination",
					"feed_name" => "excluded_destination",
					"format" => "optional",
				),
				"Ads grouping" => array(
					"name" => "ads_grouping",
					"feed_name" => "ads_grouping",
					"format" => "optional",
				),
				"Ads labels" => array(
					"name" => "ads_labels",
					"feed_name" => "ads_labels",
					"format" => "optional",
				),
			),
			"Shipping" => array(
				"Shipping" => array(
					"name" => "shipping",
					"feed_name" => "shipping",
					"format" => "optional",
				),
				"Shipping label" => array(
					"name" => "shipping_label",
					"feed_name" => "shipping_label",
				),
				"Tempo de processamento" => array(
					"name" => "_wcfmmp_processing_time",
					"feed_name" => "_wcfmmp_processing_time",
					"format" => "required",
					"woo_suggest" => "custom_attributes__wclt_lead_time",
				),
				"Shipping weight" => array(
					"name" => "shipping_weight",
					"feed_name" => "shipping_weight",
					"format" => "required",
					"woo_suggest" => "weight",
				),
				"Shipping length" => array(
					"name" => "shipping_length",
					"feed_name" => "shipping_length",
					"format" => "required",
					"woo_suggest" => "length",
				),
				"Shipping width" => array(
					"name" => "shipping_width",
					"feed_name" => "shipping_width",
					"format" => "required",
					"woo_suggest" => "width",
				),
				"Shipping height" => array(
					"name" => "shipping_height",
					"feed_name" => "shipping_height",
					"format" => "required",
					"woo_suggest" => "height",
				),
				"Transit time label" => array(
					"name" => "transit_time_label",
					"feed_name" => "transit_time_label",
					"format" => "optional",
				),
				"Minimum handling time" => array(
					"name" => "min_handling_time",
					"feed_name" => "min_handling_time",
					"format" => "optional",
				),
				"Maximum handling time" => array(
					"name" => "max_handling_time",
					"feed_name" => "max_handling_time",
					"format" => "optional",
				),
				"Ships from country" => array(
					"name" => "ships_from_country",
					"feed_name" => "ships_from_country",
					"format" => "optional",
				),
			),
			"Tax" => array(
				"Tax" => array(
					"name" => "tax",
					"feed_name" => "tax",
					"format" => "optional",
				),
				"Tax category" => array(
					"name" => "tax_category",
					"feed_name" => "tax_category",
					"format" => "required",
					"woo_suggest" => "tax_class",
				),
			),
			"Shopping Actions" => array(
				"Product fee" => array(
					"name" => "product_fee",
					"feed_name" => "product_fee",
					"format" => "optional",
				),
				"Purchase quantity limit" => array(
					"name" => "purchase_quantity_limit",
					"feed_name" => "purchase_quantity_limit",
					"format" => "required",
					"woo_suggest" => "custom_attributes_variation_maximum_allowed_quantity",
				),
				"Sell on google quantity" => array(
					"name" => "sell_on_google_quantity",
					"feed_name" => "sell_on_google_quantity",
					"format" => "optional",
				),
				"Consumer datasheet" => array(
					"name" => "consumer_datasheet",
					"feed_name" => "consumer_datasheet",
					"format" => "optional",
				),
				"Consumer notice" => array(
					"name" => "consumer_notice",
					"feed_name" => "consumer_notice",
					"format" => "optional",
				),
				"Energy label image link" => array(
					"name" => "energy_label_image_link",
					"feed_name" => "energy_label_image_link",
					"format" => "optional",
				),
				"Product detail" => array(
					"name" => "product_detail",
					"feed_name" => "product_detail",
					"format" => "optional",
				),
				"Product highlight" => array(
					"name" => "product_highlight",
					"feed_name" => "product_highlight",
					"format" => "optional",
				),
				"Return address label" => array(
					"name" => "return_address_label",
					"feed_name" => "return_address_label",
					"format" => "optional",
				),
				"Return policy label" => array(
					"name" => "return_policy_label",
					"feed_name" => "return_policy_label",
					"format" => "optional",
				),
				"Google funded promotion eligibility" => array(
					"name" => "google_funded_promotion_eligibility",
					"feed_name" => "google_funded_promotion_eligibility",
					"format" => "optional",
				),
			),
		);
		
		return $customfeed;
	}
}
?>
