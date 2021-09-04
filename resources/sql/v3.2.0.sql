-- Add default settings
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('emailPaidInvoices','facturation.soldes@customsolutions.fr');

-- Disabled not supported currencies
UPDATE r_currencies SET r_currency_actif = 0 WHERE r_currency_iso_code NOT IN ('EUR','CHF','CZK','DKK','GBP','PLN','RON','SEK','BGN','HUF','NOK','RUB','ZAR');