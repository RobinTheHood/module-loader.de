class mc_my_first_module extends StdModule
{
    public const VERSION = '1.0.0';

    public function __construct()
    {
        // Weitere Konfigurationen und Funktionen...
        $this->checkForUpdate(true);
    }
    // Weitere Moduldefinitionen und -funktionen...
}
