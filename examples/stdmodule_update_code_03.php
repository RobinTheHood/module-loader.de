class mc_my_first_module extends StdModule
{
    // Weitere Moduldefinitionen und -funktionen...
    protected function updateSteps()
    {
        $currentVersion = $this->getVersion();
        if (!$currentVersion) {
            $this->setVersion('1.0.0');
            return StdModule::UPDATE_SUCCESS;
        }

        if ($currentVersion === '1.0.0') {
            // Hier führst du die Update-Schritte
            // für Version 1.1.0 durch.
            // ...
            $this->setVersion('1.1.0');
            return StdModule::UPDATE_SUCCESS;
        }

        return StdModule::UPDATE_NOTHING;
    }
    // Weitere Moduldefinitionen und -funktionen...
}
