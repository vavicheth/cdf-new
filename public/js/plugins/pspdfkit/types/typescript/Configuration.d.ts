import ViewState from './models/ViewState';
import { ImageAnnotation, StampAnnotation } from './models/annotations';
import { AnnotationPreset } from './models/AnnotationPreset';
import { AnnotationTooltipCallback } from './models/AnnotationTooltipCallback';
import { IsEditableAnnotationCallback } from './models/IsEditableAnnotationCallback';
import { IsAPStreamRenderedCallback } from './models/IsAPStreamRenderedCallback';
import { CustomRenderers } from './models/CustomRenderers';
import { AutoSaveModeType } from './enums/AutoSaveMode';
import { ThemeType } from './enums/Theme';
import { ToolbarPlacementType } from './enums/ToolbarPlacement';
import { InstantJSON } from './lib/InstantJSON';
import { List } from "../immutable/dist/immutable-nonambient";
import { PrintModeType } from './enums/PrintMode';
import { RenderPageCallback } from './models/RenderPageCallback';
import { ToolbarItem } from './models/ToolbarItem';
import InkAnnotation from './models/annotations/InkAnnotation';
import { IsEditableCommentCallback } from './models/IsEditableCommentCallback';
import { TrustedCAsCallback } from './models/digital-signatures/TrustedCAsCallback';
import Font from './models/Font';
import { ElectronicSignaturesConfiguration } from './models/electronic-signatures/ElectronicSignaturesConfiguration';
declare const _default: {};
export default _default;
declare type SharedConfiguration = {
    container: string | HTMLElement;
    initialViewState?: ViewState;
    baseUrl?: string;
    serverUrl?: string;
    styleSheets?: Array<string>;
    toolbarItems?: Array<ToolbarItem>;
    annotationPresets?: {
        [key: string]: AnnotationPreset;
    };
    stampAnnotationTemplates?: Array<StampAnnotation | ImageAnnotation>;
    autoSaveMode?: AutoSaveModeType;
    printMode?: PrintModeType;
    disableHighQualityPrinting?: boolean;
    disableTextSelection?: boolean;
    disableForms?: boolean;
    headless?: boolean;
    locale?: string;
    populateInkSignatures?: () => Promise<List<InkAnnotation | ImageAnnotation>>;
    populateStoredSignatures?: () => Promise<List<InkAnnotation | ImageAnnotation>>;
    formFieldsNotSavingSignatures?: Array<string>;
    password?: string;
    disableOpenParameters?: boolean;
    maxPasswordRetries?: number;
    enableServiceWorkerSupport?: boolean;
    preventTextCopy?: boolean;
    renderPageCallback?: RenderPageCallback;
    annotationTooltipCallback?: AnnotationTooltipCallback;
    editableAnnotationTypes?: Array<unknown>;
    isEditableAnnotation?: IsEditableAnnotationCallback;
    customRenderers?: CustomRenderers;
    theme?: ThemeType;
    toolbarPlacement?: ToolbarPlacementType;
    minDefaultZoomLevel?: number;
    maxDefaultZoomLevel?: number;
    isEditableComment?: IsEditableCommentCallback;
    isAPStreamRendered?: IsAPStreamRenderedCallback;
    restrictAnnotationToPageBounds?: boolean;
    electronicSignatures?: ElectronicSignaturesConfiguration;
};
export declare type ServerConfiguration = SharedConfiguration & {
    documentId: string;
    authPayload: {
        jwt: string;
    };
    instant: boolean;
};
export declare type StandaloneConfiguration = SharedConfiguration & {
    document: string | ArrayBuffer;
    pdf?: string | ArrayBuffer;
    licenseKey: string;
    instantJSON?: InstantJSON;
    XFDF?: string;
    XFDFKeepCurrentAnnotations?: boolean;
    disableWebAssembly?: boolean;
    disableWebAssemblyStreaming?: boolean;
    disableIndexedDBCaching?: boolean;
    enableAutomaticLinkExtraction?: boolean;
    standaloneInstancesPoolSize?: number;
    overrideMemoryLimit?: number;
    trustedCAsCallback?: TrustedCAsCallback;
    customFonts?: Array<Font>;
};
export declare type Configuration = ServerConfiguration | StandaloneConfiguration;